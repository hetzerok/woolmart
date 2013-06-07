var fvu = function() {
    console.log('olololo');
}

WoolMart.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,
        baseCls: 'modx-formpanel'
        ,
        cls: 'container'
        ,
        items: [{
            html: '<h2>'+_('woolmart.management')+'</h2>'
            ,
            border: false
            ,
            cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,
            defaults: {
                border: false ,
                autoHeight: true
            }
            ,
            border: true
            ,
            items: [{
                title: _('woolmart')
                ,
                defaults: {
                    autoHeight: true
                }
                ,
                items: [{
                    html: '<p>'+_('woolmart.management_desc')+'</p>'
                    ,
                    border: false
                    ,
                    bodyCssClass: 'panel-desc'
                }/*,{
                    xtype: 'woolmart-grid-woolmart'
                    ,cls: 'main-wrapper'
                    ,preventRender: true
                }*/,{
                    xtype: 'button',
                    text: 'Press to create new column',
                    handler: fvu
                }]
            }]
            // only to redo the grid layout after the content is rendered
            // to fix overflow components' panels, especially when scroll bar is shown up
            ,
            listeners: {
                'afterrender': function(tabPanel) {
                    tabPanel.doLayout();
                }
            }
        }]
    });
    WoolMart.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(WoolMart.panel.Home,MODx.Panel);
Ext.reg('woolmart-panel-home',WoolMart.panel.Home);

