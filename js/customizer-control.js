function serialize(e){var r,t,n,a="",i="",o=0,c=function(e){var r=0,t=0,n=e.length,a="";for(t=0;n>t;t++)a=e.charCodeAt(t),r+=128>a?1:2048>a?2:3;return r};switch(_getType=function(e){var r,t,n,a,i=typeof e;if("object"===i&&!e)return"null";if("object"===i){if(!e.constructor)return"object";n=e.constructor.toString(),r=n.match(/(\w+)\(/),r&&(n=r[1].toLowerCase()),a=["boolean","number","string","array"];for(t in a)if(n===a[t]){i=a[t];break}}return i},type=_getType(e),type){case"function":r="";break;case"boolean":r="b:"+(e?"1":"0");break;case"number":r=(Math.round(e)===e?"i":"d")+":"+e;break;case"string":r="s:"+c(e)+':"'+e+'"';break;case"array":case"object":r="a";for(t in e)if(e.hasOwnProperty(t)){if(a=_getType(e[t]),"function"===a)continue;n=t.match(/^[0-9]+$/)?parseInt(t,10):t,i+=this.serialize(n)+this.serialize(e[t]),o++}r+=":"+o+":{"+i+"}";break;case"undefined":default:r="N"}return"object"!==type&&"array"!==type&&("string"===type&&-1!==r.indexOf("}")||(r+=";")),r}

(function($){

	$(document).ready(function(){
    $(document).on('update', "input", function(){

			var id = $(this).attr("data-id");
			var list = $("#list-control-" + id );
			list.append('<div class="listinput"><span class="removeInput" >X</span><input type="text" value="" /></div>');
		});


		$(document).on('update', ".list-control-confirm", function(){

			var id = $(this).attr("data-id");
			var list = $("#list-control-" + id );

			var values = [];
			list.children().each(function(){
				var value = $(this).find('input').val();
				values.push(value);
			});

			$("#list-input-" + id ).val( serialize( values ) ).trigger("change");


		 });

		$(document).on('click',".removeInput", function(){
		 	var $parent = $(this).parent(".listinput");
		 	$parent.remove();
		});

  });

})(jQuery);
