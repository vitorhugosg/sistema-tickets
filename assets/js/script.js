$(document).ready(function() {
  // upload de arquivos
  !function(){"use strict";var s=function(s){this.element_=s,this.init()};window.MaterialSelectfield=s,s.prototype.Constant_={},s.prototype.CssClasses_={LABEL:"mdl-selectfield__label",SELECT:"mdl-selectfield__select",IS_DIRTY:"is-dirty",IS_FOCUSED:"is-focused",IS_DISABLED:"is-disabled",IS_INVALID:"is-invalid",IS_UPGRADED:"is-upgraded"},s.prototype.onFocus_=function(s){this.element_.classList.add(this.CssClasses_.IS_FOCUSED)},s.prototype.onBlur_=function(s){this.element_.classList.remove(this.CssClasses_.IS_FOCUSED)},s.prototype.onReset_=function(s){this.updateClasses_()},s.prototype.updateClasses_=function(){this.checkDisabled(),this.checkValidity(),this.checkDirty()},s.prototype.checkDisabled=function(){this.select_.disabled?this.element_.classList.add(this.CssClasses_.IS_DISABLED):this.element_.classList.remove(this.CssClasses_.IS_DISABLED)},s.prototype.checkDisabled=s.prototype.checkDisabled,s.prototype.checkValidity=function(){this.select_.validity.valid?this.element_.classList.remove(this.CssClasses_.IS_INVALID):this.element_.classList.add(this.CssClasses_.IS_INVALID)},s.prototype.checkValidity=s.prototype.checkValidity,s.prototype.checkDirty=function(){this.select_.value&&this.select_.value.length>0?this.element_.classList.add(this.CssClasses_.IS_DIRTY):this.element_.classList.remove(this.CssClasses_.IS_DIRTY)},s.prototype.checkDirty=s.prototype.checkDirty,s.prototype.disable=function(){this.select_.disabled=!0,this.updateClasses_()},s.prototype.disable=s.prototype.disable,s.prototype.enable=function(){this.select_.disabled=!1,this.updateClasses_()},s.prototype.enable=s.prototype.enable,s.prototype.change=function(s){s&&(this.select_.value=s),this.updateClasses_()},s.prototype.change=s.prototype.change,s.prototype.init=function(){if(this.element_&&(this.label_=this.element_.querySelector("."+this.CssClasses_.LABEL),this.select_=this.element_.querySelector("."+this.CssClasses_.SELECT),this.select_)){this.boundUpdateClassesHandler=this.updateClasses_.bind(this),this.boundFocusHandler=this.onFocus_.bind(this),this.boundBlurHandler=this.onBlur_.bind(this),this.boundResetHandler=this.onReset_.bind(this),this.select_.addEventListener("change",this.boundUpdateClassesHandler),this.select_.addEventListener("focus",this.boundFocusHandler),this.select_.addEventListener("blur",this.boundBlurHandler),this.select_.addEventListener("reset",this.boundResetHandler);var s=this.element_.classList.contains(this.CssClasses_.IS_INVALID);this.updateClasses_(),this.element_.classList.add(this.CssClasses_.IS_UPGRADED),s&&this.element_.classList.add(this.CssClasses_.IS_INVALID)}},s.prototype.mdlDowngrade_=function(){this.select_.removeEventListener("change",this.boundUpdateClassesHandler),this.select_.removeEventListener("focus",this.boundFocusHandler),this.select_.removeEventListener("blur",this.boundBlurHandler),this.select_.removeEventListener("reset",this.boundResetHandler)},componentHandler.register({constructor:s,classAsString:"MaterialSelectfield",cssClass:"mdl-js-selectfield",widget:!0})}();
//# sourceMappingURL=mdl-selectfield.min.js.map
var fileInputTextDiv = document.getElementById('file_input_text_div');
var fileInput = document.getElementById('file_input_file');
var fileInputText = document.getElementById('file_input_text');


function changeInputText() {
  var str = fileInput.value;
  var i;
  if (str.lastIndexOf('\\')) {
    i = str.lastIndexOf('\\') + 1;
  } else if (str.lastIndexOf('/')) {
    i = str.lastIndexOf('/') + 1;
  }
  fileInputText.value = str.slice(i, str.length);
}

function changeState() {
  if (fileInputText.value.length != 0) {
    if (!fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.add('is-focused');
    }
  } else {
    if (fileInputTextDiv.classList.contains("is-focused")) {
      fileInputTextDiv.classList.remove('is-focused');
    }
  }
}
$('input').blur(function() {
  var $this = $(this);
  if ($this.val())
    $this.addClass('used');
  else
    $this.removeClass('used');
});

var $ripples = $('.ripples');

$ripples.on('click.Ripples', function(e) {

  var $this = $(this);
  var $offset = $this.parent().offset();
  var $circle = $this.find('.ripplesCircle');

  var x = e.pageX - $offset.left;
  var y = e.pageY - $offset.top;

  $circle.css({
    top: y + 'px',
    left: x + 'px'
  });

  $this.addClass('is-active');

});

$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
 $(this).removeClass('is-active');
});

var table = $('#table');

    // Table bordered
    $('#table-bordered').change(function() {
      var value = $( this ).val();
      table.removeClass('table-bordered').addClass(value);
    });

    // Table striped
    $('#table-striped').change(function() {
      var value = $( this ).val();
      table.removeClass('table-striped').addClass(value);
    });

    // Table hover
    $('#table-hover').change(function() {
      var value = $( this ).val();
      table.removeClass('table-hover').addClass(value);
    });

    // Table color
    $('#table-color').change(function() {
      var value = $(this).val();
      table.removeClass(/^table-mc-/).addClass(value);
    });
  });
//table order
$('#table-suporte').DataTable( {
  columnDefs: [{
    targets: [ 0, 1, 2 ],
    className: 'mdl-data-table__cell--non-numeric'
  }],
  "oLanguage": {
    "sProcessing":   "<div class='mdl-spinner mdl-js-spinner is-active'></div>",
    "sLengthMenu":   "Mostrar _MENU_ tickets",
    "sZeroRecords":  "Não foram encontrados tickets",
    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ tickets",
    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 tickets",
    "sInfoFiltered": "",
    "sInfoPostFix":  "",
    "sSearch":       "Buscar ticket:",
    "sUrl":          "",
    "oPaginate": {
      "sFirst":    "Primeiro",
      "sPrevious": "Anterior",
      "sNext":     "Seguinte",
      "sLast":     "Último"
    }
  }
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function(removeClass) {

  jQuery.fn.removeClass = function( value ) {
    if ( value && typeof value.test === "function" ) {
      for ( var i = 0, l = this.length; i < l; i++ ) {
        var elem = this[i];
        if ( elem.nodeType === 1 && elem.className ) {
          var classNames = elem.className.split( /\s+/ );

          for ( var n = classNames.length; n--; ) {
            if ( value.test(classNames[n]) ) {
              classNames.splice(n, 1);
            }
          }
          elem.className = jQuery.trim( classNames.join(" ") );
        }
      }
    } else {
      removeClass.call(this, value);
    }
    return this;
  }

});