/*
Author: Saad Amin
Website: http://www.saadamin.com
*/
jQuery(window).load(function(){jQuery("#myOptionsForm .std_input").each(function(){jQuery(this).attr("oldval",jQuery(this).val())}),jQuery(".set_heading div").remove(),jQuery("#ssr_save_btn").attr("disabled","disabled"),jQuery("#ssr_save_btn").prop("disabled",!0),jQuery("#ssr_save_btn").css({opacity:.1,cursor:"no-drop"}),jQuery("input[type=checkbox].css-checkbox").change(function(){if("ssr_item1"==this.id)return!1;this.checked?(console.log("checked "+this.id),check=1):(console.log("unchecked "+this.id),check=0);var e=this.id,s="ssr_view_st_"+e;console.log(e),jQuery.post(SSR_Ajax.ajaxurl,{action:s,s:check},function(){console.log("Saved :"+e)}),new jQuery.Zebra_Dialog("Saved successfully",{buttons:!1,type:"confirmation",title:"Saved",modal:!1,auto_close:2e3})}),jQuery("#ssr_settings_ssr_item4").live("keyup",function(){jQuery("#toplevel_page_SSR ul  li:nth-child(3) a").html("All "+jQuery.trim(jQuery("#ssr_settings_ssr_item4").val())),jQuery("#toplevel_page_SSR ul  li:nth-child(4) a").html("Add/Edit "+jQuery.trim(jQuery("#ssr_settings_ssr_item4").val()))}),jQuery("#ssr_settings_ssr_item5").live("keyup",function(){jQuery("#toplevel_page_SSR a div.wp-menu-name").html(jQuery.trim(jQuery("#ssr_settings_ssr_item5").val())),jQuery("#toplevel_page_SSR ul li.wp-first-item a").html(jQuery.trim(jQuery("#ssr_settings_ssr_item5").val()))}),jQuery("#ssr_settings_ssr_item7").live("keyup",function(){jQuery("#toplevel_page_SSR ul  li:nth-child(5) a").html("View "+jQuery.trim(jQuery("#ssr_settings_ssr_item7").val())),jQuery("#toplevel_page_SSR ul  li:nth-child(6) a").html("Add "+jQuery.trim(jQuery("#ssr_settings_ssr_item7").val()))}),jQuery("#ssr_settings_ssr_item8").live("keyup",function(){jQuery("#toplevel_page_SSR ul  li:nth-child(7) a").html("View "+jQuery.trim(jQuery("#ssr_settings_ssr_item8").val())),jQuery("#toplevel_page_SSR ul  li:nth-child(8) a").html("Add "+jQuery.trim(jQuery("#ssr_settings_ssr_item8").val()))})});