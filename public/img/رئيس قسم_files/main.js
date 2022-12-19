
$(document).ready(function(){
    var dataTable = $('#filltertable').DataTable({
        "pagelength":1,
        'aoColumnDefs':[{
            'bSortable':false,
            'aTargets':['nosort'],
        }],
        aoColumnDefs:[
            {type:'date-dd-mm-yy',aTargets:[1]}
        ],
        // "aoColumns":[
        //     null,
        //     null,
        //     null,
        //     null,
        //     null,
        //     // null,
        //     null
        // ],
        "order":false,
        "bLengthChange":false,
        "dom":'<"top">ct<"top"p><"clear">'
    });
    $("#filterbox").keyup(function(){
        dataTable.search(this.value).draw();
    });
});

$(document).ready(function(){
    var dataTable = $('#filltertables').DataTable({
        "pagelength":1,
        'aoColumnDefs':[{
            'bSortable':false,
            'aTargets':['nosort'],
        }],
        aoColumnDefs:[
            {type:'date-dd-mm-yy',aTargets:[1]}
        ],
        // "aoColumns":[
        //     null,
        //     null,
        //     null,
        //     null,
        //     null,
        //     // null,
        //     null
        // ],
        "order":false,
        "bLengthChange":false,
        "dom":'<"top">ct<"top"p><"clear">'
    });
    $("#filterboxs").keyup(function(){
        dataTable.search(this.value).draw();
    });
});