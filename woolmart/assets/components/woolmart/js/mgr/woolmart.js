var WoolMart = function(config) {
    config = config || {};
    WoolMart.superclass.constructor.call(this,config);
};
Ext.extend(WoolMart,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('woolmart',WoolMart);
WoolMart = new WoolMart();


