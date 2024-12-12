/**
 * Created by SagarKhatri on 18-Aug-15.
 */

(function ($) {

    $.fn.toggleSwitch = function () {
        var id = this.attr("id"),
            switchDivId = id + "-switch";
        $("<div/>", {class: "onoffswitch", id: switchDivId}).insertAfter(this);
        $("div#" + switchDivId).append(this.clone().addClass('onoffswitch-checkbox'));
        $("<label/>", {
            class: "onoffswitch-label",
            for: id
        }).appendTo("div#" + switchDivId);
        this.remove();
    };
}(jQuery));
;
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/
;