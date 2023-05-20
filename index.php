<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?><!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8" />
<title>Main - FeluxShop</title>
<style>
  #table {
    .sortable
  }
  table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
      content: " \25BE" 
  }

  .label-as-badge {
      border-radius: 0.5em;
  }

  body {
      padding-top:50px;
  }
  table.floatThead-table {
      border-top: none;
      border-bottom: none;
      background-color: #fff;
  }
  @media (min-width: 768px) {
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  }

  #mydiv {
    height: 400px;
    position: relative;
  }
  .ajax-loader {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: auto; /* presto! */

  }

</style><script type="text/javascript">
  function ajaxinfo() {
      $.ajax({
          type: 'GET',
          url: 'ajaxinfo.html',
          timeout: 10000,

          success: function(data) {
              if (data != '01') {
                  var data = JSON.parse(data);
                  for (var prop in data) {
                      $("#" + prop).html(data[prop]).show();
                  }
              } else {
                  window.location = "logout.html";
              }
          }
      });

  }
  setInterval(function() {
      ajaxinfo()
  }, 3000);

  ajaxinfo();

  $(document).keydown(function(event){
      if(event.which=="17")
          cntrlIsPressed = true;
  });

  $(document).keyup(function(){
      cntrlIsPressed = false;
  });

  var cntrlIsPressed = false;


  function pageDiv(n,t,u,x){
    if(cntrlIsPressed){
      window.open(u, '_blank');
      return false;
    }
          var obj = { Title: t, Url: u };
          if ( ("/"+obj.Url) != location.pathname) {
            if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
            else{history.replaceState(obj, obj.Title, obj.Url);}

        }
        document.title = obj.Title;
      $("#mainDiv").html('&lt;div id="mydiv"&gt;&lt;img src="files/img/load2.gif" class="ajax-loader"&gt;&lt;/div&gt;').show();
      $.ajax({
      type:       'GET',
      url:        'divPage'+n+'.html',
      success:    function(data)
      {
          $("#mainDiv").html(data).show();
          newTableObject = document.getElementById('table');
          sorttable.makeSortable(newTableObject);
          $(".sticky-header").floatThead({top:60});
          if(x==0){ajaxinfo();}
        }});
      if (typeof stopCheckBTC === 'function') { 
      var a = stopCheckBTC();
      }

  }

  $(window).on("popstate", function(e) {
          location.replace(document.location);

  });

  $(window).on('load', function() {
  $('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
    pageDiv(0,'Main - FeluxShop','index.html',1);
    var clipboard = new Clipboard('.copyit');
      clipboard.on('success', function(e) {
        setTooltip(e.trigger, 'Copied!');
        hideTooltip(e.trigger);
        e.clearSelection();
    });

  });


  function setTooltip(btn, message) {
    console.log("hide-1");
    $(btn).tooltip('hide')
      .attr('data-original-title', message)
      .tooltip('show');
      console.log("show");
  }

  function hideTooltip(btn) {
    setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
  }
</script><style>
        .navbar {
            background-color: #001f3f;
        }
</style><style type="text/css">.eruda-search-highlight-block{display:inline}.eruda-search-highlight-block .eruda-keyword{background:#fffbe5;color:#5c5c00}</style><style type="text/css">@font-face{font-family:eruda-icon;src:url('data:application/x-font-woff;charset=utf-8;base64,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') format('woff')}[class*=' eruda-icon-'],[class^='eruda-icon-']{display:inline-block;font-family:eruda-icon!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.eruda-icon-arrow-left:before{content:'\f101'}.eruda-icon-arrow-right:before{content:'\f102'}.eruda-icon-caret-down:before{content:'\f103'}.eruda-icon-caret-right:before{content:'\f104'}.eruda-icon-check:before{content:'\f105'}.eruda-icon-clear:before{content:'\f106'}.eruda-icon-compress:before{content:'\f107'}.eruda-icon-copy:before{content:'\f108'}.eruda-icon-delete:before{content:'\f109'}.eruda-icon-edit:before{content:'\f10a'}.eruda-icon-error:before{content:'\f10b'}.eruda-icon-expand:before{content:'\f10c'}.eruda-icon-eye:before{content:'\f10d'}.eruda-icon-play:before{content:'\f10e'}.eruda-icon-plus:before{content:'\f10f'}.eruda-icon-refresh:before{content:'\f110'}.eruda-icon-reset:before{content:'\f111'}.eruda-icon-search:before{content:'\f112'}.eruda-icon-select:before{content:'\f113'}.eruda-icon-tool:before{content:'\f114'}.eruda-icon-warn:before{content:'\f115'}@font-face{font-family:console-icon;src:url('data:application/x-font-woff;charset=utf-8;base64,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') format('woff')}[class*=' luna-console-icon-'],[class^=luna-console-icon-]{font-family:console-icon!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.luna-console-icon-caret-down:before{content:'\f101'}.luna-console-icon-caret-right:before{content:'\f102'}.luna-console-icon-error:before{content:'\f103'}.luna-console-icon-input:before{content:'\f104'}.luna-console-icon-output:before{content:'\f105'}.luna-console-icon-warn:before{content:'\f106'}.luna-console{background:#fff;overflow-y:auto;-webkit-overflow-scrolling:touch;height:100%;position:relative;will-change:scroll-position;cursor:default;font-size:12px;font-family:Menlo,Consolas,Lucida Console,Courier New,monospace}.luna-console-hidden{display:none}.luna-console-fake-logs{position:absolute;left:0;top:0;pointer-events:none;visibility:hidden;width:100%}.luna-console-fake-logs *{overflow:hidden;color:#000;position:static}.luna-console-logs{padding-top:1px;position:absolute;width:100%}.luna-console-log-container{box-sizing:content-box}.luna-console-header{white-space:nowrap;display:flex;font-size:11px;color:#545454;border-top:1px solid transparent;border-bottom:1px solid #ccc}.luna-console-header .luna-console-time-from-container{overflow-x:auto;-webkit-overflow-scrolling:touch;padding:3px 10px}.luna-console-nesting-level{width:14px;flex-shrink:0;margin-top:-1px;margin-bottom:-1px;position:relative;border-right:1px solid #ccc}.luna-console-nesting-level.luna-console-group-closed::before{content:''}.luna-console-nesting-level::before{border-bottom:1px solid #ccc;position:absolute;top:0;left:0;margin-left:100%;width:5px;height:100%;box-sizing:border-box}.luna-console-log-item{position:relative;display:flex;border-top:1px solid transparent;border-bottom:1px solid #ccc;margin-top:-1px;color:#333}.luna-console-log-item:after{content:'';display:block;clear:both}.luna-console-log-item .luna-console-code{display:inline;font-family:Menlo,Consolas,Lucida Console,Courier New,monospace}.luna-console-log-item .luna-console-code .luna-console-keyword{color:#881280}.luna-console-log-item .luna-console-code .luna-console-number{color:#1c00cf}.luna-console-log-item .luna-console-code .luna-console-operator{color:grey}.luna-console-log-item .luna-console-code .luna-console-comment{color:#236e25}.luna-console-log-item .luna-console-code .luna-console-string{color:#1a1aa6}.luna-console-log-item a{color:#15c!important}.luna-console-log-item .luna-console-icon-container{margin:0 -6px 0 10px}.luna-console-log-item .luna-console-icon-container .luna-console-icon{line-height:20px;font-size:12px;color:#333;position:relative}.luna-console-log-item .luna-console-icon-container .luna-console-icon-caret-down,.luna-console-log-item .luna-console-icon-container .luna-console-icon-caret-right{top:0;left:-2px}.luna-console-log-item .luna-console-icon-container .luna-console-icon-error{top:0;color:#ef3842}.luna-console-log-item .luna-console-icon-container .luna-console-icon-warn{top:0;color:#e8a400}.luna-console-log-item .luna-console-count{background:#8097bd;padding:2px 4px;color:#000;border-radius:10px;font-size:12px;float:left;margin:1px -6px 0 10px}.luna-console-log-item .luna-console-log-content-wrapper{flex:1;overflow:hidden}.luna-console-log-item .luna-console-log-content{padding:3px 0;margin:0 10px;overflow-x:auto;-webkit-overflow-scrolling:touch;white-space:pre-wrap;-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}.luna-console-log-item .luna-console-log-content *{-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}.luna-console-log-item.luna-console-html table,.luna-console-log-item.luna-console-table table{width:100%;border-collapse:collapse;overflow:hidden;color:#333}.luna-console-log-item.luna-console-html table th,.luna-console-log-item.luna-console-table table th{background:#f3f3f3}.luna-console-log-item.luna-console-html table td,.luna-console-log-item.luna-console-html table th,.luna-console-log-item.luna-console-table table td,.luna-console-log-item.luna-console-table table th{border:1px solid #ccc;padding:3px 10px}.luna-console-log-item.luna-console-html table tr:nth-child(even),.luna-console-log-item.luna-console-table table tr:nth-child(even){background:#f2f7fd}.luna-console-log-item.luna-console-error{z-index:50;background:#fff0f0;color:red;border-top:1px solid #ffd6d6;border-bottom:1px solid #ffd6d6}.luna-console-log-item.luna-console-error .luna-console-stack{padding-left:1.2em;white-space:nowrap}.luna-console-log-item.luna-console-error .luna-console-count{background:red}.luna-console-log-item.luna-console-debug{z-index:20}.luna-console-log-item.luna-console-input{border-bottom-color:transparent}.luna-console-log-item.luna-console-warn{z-index:40;color:#5c5c00;background:#fffbe5;border-top:1px solid #fff5c2;border-bottom:1px solid #fff5c2}.luna-console-log-item.luna-console-warn .luna-console-count{background:#e8a400}.luna-console-log-item.luna-console-info{z-index:30}.luna-console-log-item.luna-console-group,.luna-console-log-item.luna-console-groupCollapsed{font-weight:700}.luna-console-abstract .luna-console-key{color:#881391}.luna-console-abstract .luna-console-number{color:#1c00cf}.luna-console-abstract .luna-console-null{color:#5e5e5e}.luna-console-abstract .luna-console-string{color:#c41a16}.luna-console-abstract .luna-console-boolean{color:#0d22aa}.luna-console-abstract .luna-console-special{color:#5e5e5e}@font-face{font-family:object-viewer-icon;src:url('data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAS8AAsAAAAAB7QAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAAGEAAACMISgl+k9TLzIAAAFsAAAAPQAAAFZLxUkWY21hcAAAAawAAADWAAACdBU42qdnbHlmAAAChAAAAC4AAAAwabU7V2hlYWQAAAK0AAAALwAAADZzjr4faGhlYQAAAuQAAAAYAAAAJAFyANlobXR4AAAC/AAAABAAAABAAZAAAGxvY2EAAAMMAAAAEAAAACIAtACobWF4cAAAAxwAAAAfAAAAIAEbAA9uYW1lAAADPAAAASkAAAIWm5e+CnBvc3QAAARoAAAAUwAAAHZW8MNZeJxNjTsOQFAQRc/z/+sV1mABohKV0gZeJRJR2X9cT4RJZu7nFIMBMjoGvHGaF6rdngcNAc/c/O/Nvq2W5E1igdNE2zv1iGh1c5FQPlYXUlJRyxt9+/pUKadQa/AveGEGZQAAAHicY2BkkGScwMDKwMBQx9ADJGWgdAIDJ4MxAwMTAyszA1YQkOaawnCAQfcjE8MJIFcITDIwMIIIAFqDCGkAAAB4nM2STQ4BQRCFv54ZP8MwFhYW4gQcShBsSERi50BWDuFCcwJedddKRGKnOt8k9aanqudVAy0gF3NRQLgTsLhJDVHP6UW94Kp8zEhKwYIlG/YcOXHm0mTPp96aumLLwdUQ1fcIqmJrwpSZL+iqak5JmyE1Ayr1bdGhr/2ZPmp/qPQtuj/uJzqQl+pfDyypesQD6AT/ElV8PjyrMccT9rdLR3PUFBI227VTio1jbm6dodg5VnPvmAsHxzofHfmi+Sbs/pwdWcXFkWdNSNg9arIE2QufuSCyAAB4nGNgZACBlQzTGZgYGMyVxVc2O073AIpAxHsYloHFRc2dPZY2OTIwAACmEQesAAB4nGNgZGBgAOINe2b6x/PbfGXgZjgBFIjifLyvAUEDwUqGZUCSg4EJxAEAUn4LLAB4nGNgZGBgOMHAACdXMjAyoAIBADizAkx4nGNgAIITUEwGAABZUAGReJxjYAACHgYJ3BAAE94BXXicY2BkYGAQYGBmANEMDExAzAWEDAz/wXwGAApcASsAeJxlkD1uwkAUhMdgSAJSghQpKbNVCiKZn5IDQE9Bl8KYtTGyvdZ6QaLLCXKEHCGniHKCHChj82hgLT9/M2/e7soABviFh3p5uG1qvVq4oTpxm/Qg7JOfhTvo40W4S38o3MMbpsJ9POKdO3j+HZ0BSuEW7vEh3Kb/KeyTv4Q7eMK3cJf+j3APK/wJ9/HqDdPIFLEp3FIn+yy0Z3n+rrStUlOoSTA+WwtdaBs6vVHro6oOydS5WMXW5GrOrs4yo0prdjpywda5cjYaxeIHkcmRIoJBgbipDktoJNgjQwh71b3UK6YtKvq1VpggwPgqtWCqaJIhlcaGyTWOrBUOPG1K1zGt+FrO5KS5zGreJCMr/u+6t6MT0Q+wbaZKzDDiE1/kg+YO+T89EV6oAAAAeJxdxjkOgCAUANE/uOOGB+FQBIjaaEJIuL6FsfE1M6Lk9fXPoKioaWjp6BnQjEzMLKwYNtHepZhtuMs1vpvO/ch4HIlIxhK4KVyc7BwiD8nvDlkA') format('woff')}[class*=' luna-object-viewer-icon-'],[class^=luna-object-viewer-icon-]{font-family:object-viewer-icon!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.luna-object-viewer-icon-caret-down:before{content:'\f101'}.luna-object-viewer-icon-caret-right:before{content:'\f102'}.luna-object-viewer{overflow-x:auto;-webkit-overflow-scrolling:touch;cursor:default;font-family:Menlo,Consolas,Lucida Console,Courier New,monospace;font-size:12px;line-height:1.2;min-height:100%;color:#333;list-style:none!important}.luna-object-viewer ul{list-style:none!important;padding:0!important;padding-left:12px!important;margin:0!important}.luna-object-viewer li{position:relative;white-space:nowrap;line-height:16px;min-height:16px}.luna-object-viewer&gt;li&gt;.luna-object-viewer-key{display:none}.luna-object-viewer span{position:static!important}.luna-object-viewer li .luna-object-viewer-collapsed~.luna-object-viewer-close:before{color:#999}.luna-object-viewer-array .luna-object-viewer-object .luna-object-viewer-key{display:inline}.luna-object-viewer-null{color:#5e5e5e}.luna-object-viewer-regexp,.luna-object-viewer-string{color:#c41a16}.luna-object-viewer-number{color:#1c00cf}.luna-object-viewer-boolean{color:#0d22aa}.luna-object-viewer-special{color:#5e5e5e}.luna-object-viewer-key,.luna-object-viewer-key-lighter{color:#881391}.luna-object-viewer-key-lighter{opacity:.6}.luna-object-viewer-collapsed .luna-object-viewer-icon,.luna-object-viewer-expanded .luna-object-viewer-icon{position:absolute!important;left:-12px;color:#727272;font-size:12px}.luna-object-viewer-icon-caret-right{top:1px}.luna-object-viewer-icon-caret-down{top:2px}.luna-object-viewer-expanded&gt;.luna-object-viewer-icon-caret-down{display:inline}.luna-object-viewer-expanded&gt;.luna-object-viewer-icon-caret-right{display:none}.luna-object-viewer-collapsed&gt;.luna-object-viewer-icon-caret-down{display:none}.luna-object-viewer-collapsed&gt;.luna-object-viewer-icon-caret-right{display:inline}.luna-object-viewer-hidden~ul{display:none}</style><style type="text/css">.luna-dom-highlighter{position:fixed;left:0;top:0;width:100%;height:100%;z-index:100000;pointer-events:none;font-size:13px}.luna-dom-highlighter-fill{position:absolute;top:0;right:0;bottom:0;left:0}.luna-dom-highlighter-platform-linux{font-family:Roboto,Ubuntu,Arial,sans-serif}.luna-dom-highlighter-platform-mac{color:#303942;font-family:'.SFNSDisplay-Regular','Helvetica Neue','Lucida Grande',sans-serif}.luna-dom-highlighter-platform-windows{font-family:'Segoe UI',Tahoma,sans-serif}.luna-dom-highlighter-px{color:gray}#luna-dom-highlighter-element-title{position:absolute;z-index:10}.luna-dom-highlighter-tooltip-content{position:absolute;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#fff;padding:5px 8px;border:1px solid #fff;border-radius:3px;box-sizing:border-box;min-width:100px;max-width:min(300px,100% - 4px);z-index:2;background-clip:padding-box;will-change:transform;text-rendering:optimizeLegibility;pointer-events:none;filter:drop-shadow(0 2px 4px rgba(0,0,0,.35))}.luna-dom-highlighter-tooltip-content .luna-dom-highlighter-tooltip-arrow{background:#fff;width:15px;height:8px;position:absolute}.luna-dom-highlighter-element-info-section{margin-top:12px;margin-bottom:6px}.luna-dom-highlighter-section-name{color:#333;font-weight:500;font-size:10px;text-transform:uppercase;letter-spacing:.05em;line-height:12px}.luna-dom-highlighter-element-info{display:flex;flex-direction:column}.luna-dom-highlighter-element-info-header{display:flex;align-items:center}.luna-dom-highlighter-element-info-body{display:flex;flex-direction:column;padding-top:2px;margin-top:2px}.luna-dom-highlighter-element-info-row{display:flex;line-height:19px}.luna-dom-highlighter-separator-container{display:flex;align-items:center;flex:auto;margin-left:7px}.luna-dom-highlighter-separator{border-top:1px solid #ddd;width:100%}.luna-dom-highlighter-element-info-name{flex-shrink:0;color:#666}.luna-dom-highlighter-element-info-gap{flex:auto}.luna-dom-highlighter-element-info-value-color{display:flex;color:#303942;margin-left:10px;align-items:baseline}.luna-dom-highlighter-a11y-icon{width:16px;height:16px;background-repeat:no-repeat;display:inline-block}.luna-dom-highlighter-element-info-value-contrast{display:flex;align-items:center;text-align:right;color:#303942;margin-left:10px}.luna-dom-highlighter-element-info-value-contrast .luna-dom-highlighter-a11y-icon{margin-left:8px}.luna-dom-highlighter-element-info-value-icon{display:flex;align-items:center}.luna-dom-highlighter-element-info-value-text{text-align:right;color:#303942;margin-left:10px;align-items:baseline;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.luna-dom-highlighter-color-swatch{display:flex;margin-right:2px;width:10px;height:10px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAGUlEQVQYV2M4gwH+YwCGIasIUwhT25BVBADtzYNYrHvv4gAAAABJRU5ErkJggg==);line-height:10px}.luna-dom-highlighter-color-swatch-inner{flex:auto;border:1px solid #808002}.luna-dom-highlighter-element-layout-type{margin-right:10px;width:16px;height:16px}.luna-dom-highlighter-element-layout-type.luna-dom-highlighter-grid{background-image:url('data:image/svg+xml,&lt;svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;&lt;rect x="2.5" y="2.5" width="4" height="4" stroke="%231A73E8"/&gt;&lt;rect x="9.5" y="2.5" width="4" height="4" stroke="%231A73E8"/&gt;&lt;rect x="9.5" y="9.5" width="4" height="4" stroke="%231A73E8"/&gt;&lt;rect x="2.5" y="9.5" width="4" height="4" stroke="%231A73E8"/&gt;&lt;/svg&gt;')}.luna-dom-highlighter-element-layout-type.luna-dom-highlighter-flex{background-image:url('data:image/svg+xml,&lt;svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"&gt;&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M1 3.5h8v3H1v-3zm-1 0a1 1 0 011-1h8a1 1 0 011 1v3a1 1 0 01-1 1H1a1 1 0 01-1-1v-3zm12 0h3v3h-3v-3zm-1 0a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-3zm-7 6H1v3h3v-3zm-3-1a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1v-3a1 1 0 00-1-1H1zm6 4v-3h8v3H7zm-1-3a1 1 0 011-1h8a1 1 0 011 1v3a1 1 0 01-1 1H7a1 1 0 01-1-1v-3z" fill="%231A73E8"/&gt;&lt;/svg&gt;')}.luna-dom-highlighter-element-description{flex:1 1;font-weight:700;word-wrap:break-word;word-break:break-all}.luna-dom-highlighter-dimensions{color:#737373;text-align:right;margin-left:10px}.luna-dom-highlighter-material-node-width{margin-right:2px}.luna-dom-highlighter-material-node-height{margin-left:2px}.luna-dom-highlighter-material-tag-name{color:#881280}.luna-dom-highlighter-material-class-name,.luna-dom-highlighter-material-node-id{color:#1a1aa6}.luna-dom-highlighter-contrast-text{width:16px;height:16px;text-align:center;line-height:16px;margin-right:8px;border:1px solid #000;padding:0 1px}.luna-dom-highlighter-a11y-icon-not-ok{background-image:url('data:image/svg+xml,&lt;svg fill="none" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="m9 1.5c-4.14 0-7.5 3.36-7.5 7.5s3.36 7.5 7.5 7.5 7.5-3.36 7.5-7.5-3.36-7.5-7.5-7.5zm0 13.5c-3.315 0-6-2.685-6-6 0-1.3875.4725-2.6625 1.2675-3.675l8.4075 8.4075c-1.0125.795-2.2875 1.2675-3.675 1.2675zm4.7325-2.325-8.4075-8.4075c1.0125-.795 2.2875-1.2675 3.675-1.2675 3.315 0 6 2.685 6 6 0 1.3875-.4725 2.6625-1.2675 3.675z" fill="%239e9e9e"/&gt;&lt;/svg&gt;')}.luna-dom-highlighter-a11y-icon-warning{background-image:url('data:image/svg+xml,&lt;svg fill="none" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="m8.25 11.25h1.5v1.5h-1.5zm0-6h1.5v4.5h-1.5zm.7425-3.75c-4.14 0-7.4925 3.36-7.4925 7.5s3.3525 7.5 7.4925 7.5c4.1475 0 7.5075-3.36 7.5075-7.5s-3.36-7.5-7.5075-7.5zm.0075 13.5c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z" fill="%23e37400"/&gt;&lt;/svg&gt;')}.luna-dom-highlighter-a11y-icon-ok{background-image:url('data:image/svg+xml,&lt;svg fill="none" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"&gt;&lt;path d="m9 1.5c-4.14 0-7.5 3.36-7.5 7.5s3.36 7.5 7.5 7.5 7.5-3.36 7.5-7.5-3.36-7.5-7.5-7.5zm0 13.5c-3.3075 0-6-2.6925-6-6s2.6925-6 6-6 6 2.6925 6 6-2.6925 6-6 6zm-1.5-4.35-1.95-1.95-1.05 1.05 3 3 6-6-1.05-1.05z" fill="%230ca40c"/&gt;&lt;/svg&gt;')}@media (forced-colors:active){:root,body{background-color:transparent;forced-color-adjust:none}.luna-dom-highlighter-tooltip-content{border-color:Highlight;background-color:canvas;color:text;forced-color-adjust:none}.luna-dom-highlighter-tooltip-content::after{background-color:Highlight}.luna-dom-highlighter-color-swatch-inner,.luna-dom-highlighter-contrast-text,.luna-dom-highlighter-separator{border-color:Highlight}.luna-dom-highlighter-section-name{color:Highlight}.luna-dom-highlighter-dimensions,.luna-dom-highlighter-element-info-name,.luna-dom-highlighter-element-info-value-color,.luna-dom-highlighter-element-info-value-contrast,.luna-dom-highlighter-element-info-value-icon,.luna-dom-highlighter-element-info-value-text,.luna-dom-highlighter-material-class-name,.luna-dom-highlighter-material-node-id,.luna-dom-highlighter-material-tag-name{color:canvastext}}

/*# sourceMappingURL=luna-dom-highlighter.css.map*/</style></head>



<body style="padding-top: 70px; padding-bottom: 70px;">

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <div class="navbar-brand" onclick="location.href='index.html'" onmouseover="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Xbaseleet <small><span class="glyphicon glyphicon-refresh"></span></small></b></div></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - Xbaseleet','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp">1</span></a></li>
            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - Xbaseleet','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel">0</span></a></li>
            <li><a href="shell.html" onclick="pageDiv(3,'Shell - Xbaseleet','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell">0</span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - Xbaseleet','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer">0</span></a></li>
            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - Xbaseleet','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp">0</span></a></li>  
          </ul>
        </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="leads.html" onclick="pageDiv(6,'Leads - Xbaseleet','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads">0</span></a></li>
          </ul>
        </li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - Xbaseleet','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium">7</span></a></li>
            <li><a href="banks.html" onclick="pageDiv(8,'Banks - Xbaseleet','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks">0</span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - Xbaseleet','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams">1</span></a></li>
            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - Xbaseleet','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials">2</span></a></li>  
          </ul>
        </li>
                      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                              
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - Xbaseleet','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets">0</span></span>	</a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - Xbaseleet','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports">0</span></span>  </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;"><span class="badge"><b><span id="balance">0</span></b> <span class="glyphicon glyphicon-plus"></span><span> </span></span></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - Xbaseleet','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - Xbaseleet','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html">Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainDiv">
<div class="form-group col-lg-7 ">
<div class="well">
  Hello <a class="label label-primary">XBASELEET</a><br />
    If you have any <b>Question</b> ,<b>Problem</b>, <b>Suggestion</b> or <b>Request</b> Please feel free to <a class="label label-default " href="tickets.html"><span class="glyphicon glyphicon-pencil"></span> Open a Ticket</a><br />
    if you want to report an order , just go to <abbr title="Account - &gt; My Orders or Click here">My Orders  <span class="glyphicon glyphicon-shopping-cart"></span></abbr> 
    then click on <a class="label label-primary">Report #[Order Id]</a> button<br /><br />
    Our Domains are <b>Felux.shop</b>- Please Save them!

</div>

    <div class="list-group" id="div2">
      	<h3><i class="glyphicon glyphicon-info-sign"></i> News</h3><a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Fixed!</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:26</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>New Accounts Addeded</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:14</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Updated</b></h5><h6 class="list-group-item-text">2020-03-23 22:28:56</h6></a>

				 </div>

</div>
<div class="form-group col-lg-4 ">
	<!-- <img src="files/img/eid.jpg" style="width: 70%; height: 70%" title="Eid Mubarak"> -->
<iframe src="static.html" style="border:none;" width="400" height="270" scrolling="no">Browser not compatible.</iframe>

    	<div class="well well-sm">    
                  <h4><b>Our Support team is here !</b></h4><a class="btn btn-default btn-sm" onclick="pageDiv(9,'Tickets - FeluxShop','tickets.html#open',0); return false;" href="tickets.html#open"><span class="glyphicon glyphicon-pencil"></span> Open a Ticket</a>
                  <h5><b>Interested in becoming a seller at  Olux Shop ?</b></h5><a class="btn btn-primary btn-xs" href="seller.html" onclick="pageDiv(24,'Become Seller  - FeluxShop','seller.html',0); return false;">Learn more</a>
                  <h5><b>Available Payment Methods </b></h5>

                  <img src="files/img/pmlogo2.png" height="48" width="49" title="PerfectMoney" onclick="pageDiv(11,'Add Balance - FeluxShop','addBalance.html#perfectmoney',0); return false;" href="addBalance.html#perfectmoney" onmouseover="this.style.cursor='pointer'" />
                  <img src="files/img/btclogo.png" height="48" width="49" title="Bitcoin" onclick="pageDiv(11,'Add Balance - FeluxShop','addBalance.html#bitcoin',0); return false;" href="addBalance.html#bitcoin" onmouseover="this.style.cursor='pointer'" />
                 
      </div>
	
                 
      </div>
  
</div>



</body><div style="all: initial;"></div><div class="__chobitsu-hide__ luna-dom-highlighter luna-dom-highlighter-platform-mac"><canvas id="canvas" class="luna-dom-highlighter-fill" width="390" height="664" style="width: 390px; height: 664px;"></canvas><div></div></div></html>