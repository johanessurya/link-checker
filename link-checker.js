var DataTableManager = function(datatableElement) {
    this.el = datatableElement;
    this.id = 0;

    this.add = function(url, statusCode, statusName) {
        this.id++;

        var status = statusCode + ' (' + statusName + ')';
        this.el.row.add([this.id, url, status]);
    }

    this.draw = function() {
        this.el.draw();
    }

    this.clear = function() {
        this.id = 0;
        this.el.clear();
    }

    this.count = function() {
        return this.el.rows().count();
    }
}

var BatchAjax = function (urlList, dataTableManager) {
    this.apiUrl = 'ajax_check_url.php';

    this.list = urlList;
    this.manager = dataTableManager;
    
    this.run = function(callback) {
        var vm = this;
        var x = this.list.shift();
        $.get(this.apiUrl + '?url=' + x, function(data) {
            var json = JSON.parse(data);

            if (json.status) {
                manager.add(json.url, json.status, json.status_name);
                manager.draw();
            }

            if(vm.list.length > 0) {
                vm.run(callback);
            } else {
                callback()
            }
        })
    }
}

var prepareEventListener = function(manager) {
    $('#form1').submit(function(e) {
        e.preventDefault();
        $('#submit-button').text('Loading...');

        // Split lines
        var list = $('#url-list').val().split("\n");

        manager.clear();
        var batchAjax = new BatchAjax(list, manager);
        batchAjax.run(function() {
            $('#submit-button').text('Check');
        });
    });
}

var manager = null;
$(document).ready(function() {
    // Preparation
    var el = $("#result-table").DataTable();
    el.clear();
    manager = new DataTableManager(el);

    prepareEventListener(manager);
});