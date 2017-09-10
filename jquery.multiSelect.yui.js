if(jQuery){(function($){function renderOption(id,option){var html='<label><input type="checkbox" name="'+id+'[]" value="'+option.value+'"';if(option.selected){html+=' checked="checked"'}html+=" />"+option.text+"</label>";return html}function renderOptions(id,options,o){var html="";for(var i=0;i<options.length;i++){if(options[i].optgroup){html+='<label class="optGroup">';if(o.optGroupSelectable){html+='<input type="checkbox" class="optGroup" />'+options[i].optgroup}else{html+=options[i].optgroup}html+='</label><div class="optGroupContainer">';html+=renderOptions(id,options[i].options,o);html+="</div>"}else{html+=renderOption(id,options[i])}}return html}function buildOptions(options){var multiSelect=$(this);var multiSelectOptions=multiSelect.next(".multiSelectOptions");var o=multiSelect.data("config");var callback=multiSelect.data("callback");multiSelectOptions.html("");var html="";if(o.selectAll){html+='<label class="selectAll"><input type="checkbox" class="selectAll" />'+o.selectAllText+"</label>"}html+=renderOptions(multiSelect.attr("id"),options,o);multiSelectOptions.html(html);var initialWidth=multiSelectOptions.width();var hasScrollbar=false;if(multiSelectOptions.height()>o.listHeight){multiSelectOptions.css("height",o.listHeight+"px");hasScrollbar=true}else{multiSelectOptions.css("height","")}var scrollbarWidth=hasScrollbar&&(initialWidth==multiSelectOptions.width())?17:0;if((multiSelectOptions.width()+scrollbarWidth)<multiSelect.outerWidth()){multiSelectOptions.css("width",multiSelect.outerWidth()-2+"px")}else{multiSelectOptions.css("width",(multiSelectOptions.width()+scrollbarWidth)+"px")}if($.fn.bgiframe){multiSelect.next(".multiSelectOptions").bgiframe({width:multiSelectOptions.width(),height:multiSelectOptions.height()})}if(o.selectAll){multiSelectOptions.find("INPUT.selectAll").click(function(){multiSelectOptions.find("INPUT:checkbox").attr("checked",$(this).attr("checked")).parent("LABEL").toggleClass("checked",$(this).attr("checked"))})}if(o.optGroupSelectable){multiSelectOptions.addClass("optGroupHasCheckboxes");multiSelectOptions.find("INPUT.optGroup").click(function(){$(this).parent().next().find("INPUT:checkbox").attr("checked",$(this).attr("checked")).parent("LABEL").toggleClass("checked",$(this).attr("checked"))})}multiSelectOptions.find("INPUT:checkbox").click(function(){$(this).parent("LABEL").toggleClass("checked",$(this).attr("checked"));updateSelected.call(multiSelect);multiSelect.focus();if($(this).parent().parent().hasClass("optGroupContainer")){updateOptGroup.call(multiSelect,$(this).parent().parent().prev())}if(callback){callback($(this))}});multiSelectOptions.each(function(){$(this).find("INPUT:checked").parent().addClass("checked")});updateSelected.call(multiSelect);if(o.optGroupSelectable){multiSelectOptions.find("LABEL.optGroup").each(function(){updateOptGroup.call(multiSelect,$(this))})}multiSelectOptions.find("LABEL:has(INPUT)").hover(function(){$(this).parent().find("LABEL").removeClass("hover");$(this).addClass("hover")},function(){$(this).parent().find("LABEL").removeClass("hover")});multiSelect.keydown(function(e){var multiSelectOptions=$(this).next(".multiSelectOptions");if(multiSelectOptions.css("visibility")!="hidden"){if(e.keyCode==9){$(this).addClass("focus").trigger("click");$(this).focus().next(":input").focus();return true}if(e.keyCode==27||e.keyCode==37||e.keyCode==39){$(this).addClass("focus").trigger("click")}if(e.keyCode==40||e.keyCode==38){var allOptions=multiSelectOptions.find("LABEL");var oldHoverIndex=allOptions.index(allOptions.filter(".hover"));var newHoverIndex=-1;if(oldHoverIndex<0){multiSelectOptions.find("LABEL:first").addClass("hover")}else{if(e.keyCode==40&&oldHoverIndex<allOptions.length-1){newHoverIndex=oldHoverIndex+1}else{if(e.keyCode==38&&oldHoverIndex>0){newHoverIndex=oldHoverIndex-1}}}if(newHoverIndex>=0){$(allOptions.get(oldHoverIndex)).removeClass("hover");$(allOptions.get(newHoverIndex)).addClass("hover");adjustViewPort(multiSelectOptions)}return false}if(e.keyCode==13||e.keyCode==32){var selectedCheckbox=multiSelectOptions.find("LABEL.hover INPUT:checkbox");selectedCheckbox.attr("checked",!selectedCheckbox.attr("checked")).parent("LABEL").toggleClass("checked",selectedCheckbox.attr("checked"));if(selectedCheckbox.hasClass("selectAll")){multiSelectOptions.find("INPUT:checkbox").attr("checked",selectedCheckbox.attr("checked")).parent("LABEL").addClass("checked").toggleClass("checked",selectedCheckbox.attr("checked"))}updateSelected.call(multiSelect);if(callback){callback($(this))}return false}if(e.keyCode>=33&&e.keyCode<=126){var match=multiSelectOptions.find("LABEL:startsWith("+String.fromCharCode(e.keyCode)+")");var currentHoverIndex=match.index(match.filter("LABEL.hover"));var afterHoverMatch=match.filter(function(index){return index>currentHoverIndex});match=(afterHoverMatch.length>=1?afterHoverMatch:match).filter("LABEL:first");if(match.length==1){multiSelectOptions.find("LABEL.hover").removeClass("hover");match.addClass("hover");adjustViewPort(multiSelectOptions)}}}else{if(e.keyCode==38||e.keyCode==40||e.keyCode==13||e.keyCode==32){$(this).removeClass("focus").trigger("click");multiSelectOptions.find("LABEL:first").addClass("hover");return false}if(e.keyCode==9){multiSelectOptions.next(":input").focus();return true}}if(e.keyCode==13){return false}})}function adjustViewPort(multiSelectOptions){var selectionBottom=multiSelectOptions.find("LABEL.hover").position().top+multiSelectOptions.find("LABEL.hover").outerHeight();if(selectionBottom>multiSelectOptions.innerHeight()){multiSelectOptions.scrollTop(multiSelectOptions.scrollTop()+selectionBottom-multiSelectOptions.innerHeight())}if(multiSelectOptions.find("LABEL.hover").position().top<0){multiSelectOptions.scrollTop(multiSelectOptions.scrollTop()+multiSelectOptions.find("LABEL.hover").position().top)}}function updateOptGroup(optGroup){var multiSelect=$(this);var o=multiSelect.data("config");if(o.optGroupSelectable){var optGroupSelected=true;$(optGroup).next().find("INPUT:checkbox").each(function(){if(!$(this).attr("checked")){optGroupSelected=false;return false}});$(optGroup).find("INPUT.optGroup").attr("checked",optGroupSelected).parent("LABEL").toggleClass("checked",optGroupSelected)}}function updateSelected(){var multiSelect=$(this);var multiSelectOptions=multiSelect.next(".multiSelectOptions");var o=multiSelect.data("config");var i=0;var selectAll=true;var display="";multiSelectOptions.find("INPUT:checkbox").not(".selectAll, .optGroup").each(function(){if($(this).attr("checked")){i++;display=display+$(this).parent().text()+", "}else{selectAll=false}});display=display.replace(/\s*\,\s*$/,"");if(i==0){multiSelect.find("span").html(o.noneSelected)}else{if(o.oneOrMoreSelected=="*"){multiSelect.find("span").html(display);multiSelect.attr("title",display)}else{multiSelect.find("span").html(o.oneOrMoreSelected.replace("%",i))}}if(o.selectAll){multiSelectOptions.find("INPUT.selectAll").attr("checked",selectAll).parent("LABEL").toggleClass("checked",selectAll)}}$.extend($.fn,{multiSelect:function(o,callback){if(!o){o={}}if(o.selectAll==undefined){o.selectAll=true}if(o.selectAllText==undefined){o.selectAllText="Select All"}if(o.noneSelected==undefined){o.noneSelected="Select options"}if(o.oneOrMoreSelected==undefined){o.oneOrMoreSelected="% selected"}if(o.optGroupSelectable==undefined){o.optGroupSelectable=false}if(o.listHeight==undefined){o.listHeight=150}$(this).each(function(){var select=$(this);var html='<a href="javascript:;" class="multiSelect"><span></span></a>';html+='<div class="multiSelectOptions" style="position: absolute; z-index: 99999; visibility: hidden;"></div>';$(select).after(html);var multiSelect=$(select).next(".multiSelect");var multiSelectOptions=multiSelect.next(".multiSelectOptions");multiSelect.find("span").css("width",$(select).width()+"px");multiSelect.data("config",o);multiSelect.data("callback",callback);var options=[];$(select).children().each(function(){if(this.tagName.toUpperCase()=="OPTGROUP"){var suboptions=[];options.push({optgroup:$(this).attr("label"),options:suboptions});$(this).children("OPTION").each(function(){if($(this).val()!=""){suboptions.push({text:$(this).html(),value:$(this).val(),selected:$(this).attr("selected")})}})}else{if(this.tagName.toUpperCase()=="OPTION"){if($(this).val()!=""){options.push({text:$(this).html(),value:$(this).val(),selected:$(this).attr("selected")})}}}});$(select).remove();multiSelect.attr("id",$(select).attr("id"));buildOptions.call(multiSelect,options);multiSelect.hover(function(){$(this).addClass("hover")},function(){$(this).removeClass("hover")}).click(function(){if($(this).hasClass("active")){$(this).multiSelectOptionsHide()}else{$(this).multiSelectOptionsShow()}return false}).focus(function(){$(this).addClass("focus")}).blur(function(){$(this).removeClass("focus")});$(document).click(function(event){if(!($(event.target).parents().andSelf().is(".multiSelectOptions"))){multiSelect.multiSelectOptionsHide()}})})},multiSelectOptionsUpdate:function(options){buildOptions.call($(this),options)},multiSelectOptionsHide:function(){$(this).removeClass("active").removeClass("hover").next(".multiSelectOptions").css("visibility","hidden")},multiSelectOptionsShow:function(){var multiSelect=$(this);var multiSelectOptions=multiSelect.next(".multiSelectOptions");var o=multiSelect.data("config");$(".multiSelect").multiSelectOptionsHide();multiSelectOptions.find("LABEL").removeClass("hover");multiSelect.addClass("active").next(".multiSelectOptions").css("visibility","visible");multiSelect.focus();multiSelect.next(".multiSelectOptions").scrollTop(0);var offset=multiSelect.position();multiSelect.next(".multiSelectOptions").css({top:offset.top+$(this).outerHeight()+"px"});multiSelect.next(".multiSelectOptions").css({left:offset.left+"px"})},selectedValuesString:function(){var selectedValues="";$(this).next(".multiSelectOptions").find("INPUT:checkbox:checked").not(".optGroup, .selectAll").each(function(){selectedValues+=$(this).attr("value")+","});return selectedValues.replace(/\s*\,\s*$/,"")}});$.expr[":"].startsWith=function(el,i,m){var search=m[3];if(!search){return false}return eval("/^[/s]*"+search+"/i").test($(el).text())}})(jQuery)};