/*
 * jQuery contextMenu - Plugin for simple contextMenu handling
 *
 * Version: 1.5.9
 *
 * Authors: Rodney Rehm, Addy Osmani (patches for FF)
 * Web: http://medialize.github.com/jQuery-contextMenu/
 *
 * Licensed under
 *   MIT License http://www.opensource.org/licenses/mit-license
 *   GPL v3 http://opensource.org/licenses/GPL-3.0
 *
 */

(function($, undefined){
    $.widget( "ui.combobox", {
        _create: function() {
            var self = this;
            var select = this.element,
            theWidth = select.width(),
            selected = select.children( ":selected" ),
            value = selected.val() ? selected.text() : " ";
            select.hide();
            var input = this.input = $( "<input style='width:"+theWidth+"px'>" )
            .insertAfter( select )
            .val( value )
            .autocomplete({
                delay: 0,
                minLength: 0,
                source: function( request, response ) {
                    var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
                    response( select.children( "option" ).map(function() {
                        var text = $( this ).text();
                        if ( this.value && ( !request.term || matcher.test(text) ) )
                            return {
                                label: text.replace(
                                    new RegExp(
                                        "(?![^&;]+;)(?!<[^<>]*)(" +
                                        $.ui.autocomplete.escapeRegex(request.term) +
                                        ")(?![^<>]*>)(?![^&;]+;)", "gi"
                                        ), "<strong>$1</strong>" ),
                                value: text,
                                option: this
                            };
                    }) );
                },
                select: function( event, ui ) {
                    ui.item.option.selected = true;
                    self._trigger( "selected", event, {
                        item: ui.item.option
                    });
                },
                change: function( event, ui ) {
                    if ( !ui.item ) {
                        var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
                        valid = false;
                        select.children( "option" ).each(function() {
                            if ( $( this ).text().match( matcher ) ) {
                                this.selected = valid = true;
                                return false;
                            }
                        });
                        if ( !valid ) {
                            // remove invalid value, as it didn't match anything
                            $( this ).val( "" );
                            select.val( "" );
                            input.data( "autocomplete" ).term = "";
                            return false;
                        }
                    }
                }
            })
            .addClass( "ui-widget ui-widget-content ui-corner-left" );

            input.data( "autocomplete" )._renderItem = function( ul, item ) {
                return $( "<li></li>" )
                .data( "item.autocomplete", item )
                .append( "<a>" + item.label + "</a>" )
                .appendTo( ul );
            };

            this.button = $( "<button type='button' style='width:20px'>&nbsp;</button>" )
            .attr( "tabIndex", -1 )
            .attr( "title", "Show All Items" )
            .insertAfter( input )
            .button({
                icons: {
                    primary: "ui-icon-triangle-1-s"
                },
                text: false
            })
            .removeClass( "ui-corner-all" )
            .addClass( "ui-corner-right ui-button-icon" )
            .click(function() {
                // close if already visible
                if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
                    input.autocomplete( "close" );
                    return;
                }

                // work around a bug (likely same cause as #5265)
                $( this ).blur();

                // pass empty string as value to search for, displaying all results
                input.autocomplete( "search", "" );
                input.focus();
            });
        },

        destroy: function() {
            this.input.remove();
            this.button.remove();
            this.element.show();
            $.Widget.prototype.destroy.call( this );
        },
        
        setValue: function(value){
            $(this.element).val(value);
            $(this.input).val($(this.element).find("option:selected").text()); 
        }
    });
})(jQuery);
