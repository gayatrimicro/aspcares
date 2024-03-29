/*!
 * SpidocheScaler - Scale the dom width jQuery
 *
 * Version    : 1.2.3
 * Author     : Spidoche - spidoche.com
 * Require    : jQuery v1.7.2 or later
 * IE support : ie9 or later
 *
 * Plugin URL : https://github.com/spidoche/spidocheScaler
 * Demo URL   : http://spidoche.com/spidocheScaler/
 */
!function(i){function t(t,e){this.options=i.extend({maxWidth:800,minWidth:0,destroyAt:-1},e),this.item=i(t),this.is_init=!1,this.is_destroy=!1,this.load()}t.prototype={init:function(){var i=this,t=i.item,e=(new Date).getTime(),s=null;i.uid=e,t.wrap('<div class="spidochescaler-container" />'),s=t.parent(),i.scale_dom(t,s,s.width(),t.outerHeight(!0))},scale_dom:function(i,t,e,s){var r=this.options;if(t.width()>r.maxWidth)return void i.removeAttr("style").parent().removeAttr("style");i.css({width:r.maxWidth});var n=1,a=1,o=1,h=1,d=1,c=i.width(),l=i.outerHeight(!0);n=e/c,a=s/l,h=n,d=a,o=n>a?a:n,t.width()>r.minWidth&&(t.hasClass("spidochescaler-container")&&t.css({height:l*o,display:"inline-block",width:"100%",verticalAlign:"top"}),i.css({width:r.maxWidth,margin:0,transformOrigin:"0 0",transform:"scale("+o+")"}))},resize:function(){var t=this,e=t.item,s=e.parent(),r=t.options.destroyAt;i(window).on("resize.domScaler."+t.uid,function(){i(window).width()>r&&t.is_init===!0?t.scale_dom(e,s,s.width(),e.outerHeight(!0)):i(window).width()<=r&&t.is_init===!0?t.destroy():i(window).width()>r&&t.is_init===!1&&(t.load(),t.is_init=!0)})},load:function(){i(window).width()>this.options.destroyAt&&(this.init(),this.is_init=!0),this.resize()},destroy:function(){this.item.removeAttr("style"),this.item.parent().hasClass("spidochescaler-container")&&this.item.unwrap(),this.is_init=!1}},i.fn.spidochescaler=function(e){var s=Array.prototype.slice.call(arguments,1);return this.each(function(){var r=i(this),n=r.data("SpidocheScaler");n?"string"==typeof e&&n[e].apply(n,s):r.data("SpidocheScaler",new t(this,e))})}}(jQuery);