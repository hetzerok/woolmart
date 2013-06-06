Ext.onReady(function() {
    MODx.load({ xtype: 'woolmart-page-home'});
});
 
WoolMart.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'woolmart-panel-home'
            ,renderTo: 'woolmart-panel-home-div'
        }]
    });
    WoolMart.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(WoolMart.page.Home,MODx.Component);
Ext.reg('woolmart-page-home',WoolMart.page.Home);
