var DataTableManager = function(datatableElement) {
    this.el = datatableElement;

    this.add = function(id, url, status) {
        this.el.row.add([id, url, status]);
    }

    this.draw = function() {
        this.el.draw();
    }

    this.count = function() {
        return this.el.rows().count();
    }
}

var BatchAjax = function (urlList, dataTableManager) {
    this.apiUrl = 'test.json';

    this.list = urlList;
    this.manager = dataTableManager;
    
    this.run = function() {
        var vm = this;
        var x = this.list.shift();
        $.get(this.apiUrl, function(data) {
            var json = JSON.parse(data);

            manager.add(json.id, json.url, json.status);
            manager.draw();

            if(vm.list.length > 0) {
                vm.run();
            }
        })
    }
}

var manager = null;
$(document).ready(function() {
    // Preparation
    var el = $("#result-table").DataTable()
    el.clear();
    manager = new DataTableManager(el);

    var batchAjax = new BatchAjax([1,2,3,4], manager);
    batchAjax.run();
});