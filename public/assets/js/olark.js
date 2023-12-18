;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js");
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('3735-773-10-4460');

olark.configure('box.inline', true);
/* custom configuration goes here (www.olark.com/documentation) */

var ChatSupport = {
	textChatID: 0,
	logTextChatMessage: function(operatorName, fromOperator, message) {
		var self = this;
		var user_id = $('.chat-now-support input[name="user_id"]').val();
		$.ajax({
			url: "/support/log_text_chat_message",
			method: "POST",
			data: {
				operator_name: operatorName,
				from_operator: fromOperator,
				user_id: user_id,
				message: message
			}
		});
	}
};

olark("api.chat.onReady", function() {
	
	var user_id = $('.chat-now-support input[name="user_id"]').val();

	if (user_id) {
		olark("api.visitor.updateFullName", {
				user_id: user_id
		});
	}
});

olark("api.chat.onMessageToVisitor", function(evt) {
	//console.log(evt);
	ChatSupport.logTextChatMessage(evt.message.nickname, 1, evt.message.body);
});

olark("api.chat.onMessageToOperator", function(evt) {

	ChatSupport.logTextChatMessage(evt.message.nickname, 0, evt.message.body);
});

olark("api.chat.onOperatorsAway", function() {
	$("#olark-box-container").addClass("hidden");
	$("#olark-not-available").removeClass("hidden");
});
olark("api.chat.onOperatorsAvailable", function() {
	$("#olark-box-container").removeClass("hidden");
	$("#olark-not-available").addClass("hidden");
});
/*]]>*/