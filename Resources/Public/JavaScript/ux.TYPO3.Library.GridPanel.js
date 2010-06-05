Ext.namespace('Library.Index');

Library.Index.GridPanel = Ext.extend(Ext.grid.GridPanel, {
    constructor: function(config) {
        config = Ext.apply({
            title: 'Article list',
            store: astore,
            columns: Library.Index.ArticleColumns,
            loadMask: {
                msg: 'загрузка ...'
            },
            tbar: new Library.Index.toolbar,
            bbar: new Ext.PagingToolbar({
                store: astore,      // grid and PagingToolbar using same store
                displayInfo: true,
                pageSize: pageSize
            })
        }, config);

        Library.Index.GridPanel.superclass.constructor.call(this, config);
    }
});