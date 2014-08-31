function fnSubmit() {
	alert('コメントの登録が完了致しました。');
	document.form1.mode.value = 'insert';
	document.form1.submit();
}

function fnDelete(id) {
	if(window.confirm('削除しますがよろしいですか？')){
	    alert('コメントの削除が完了致しました。');
	    document.form1.id.value = id;
	    document.form1.mode.value = 'delete';
	    document.form1.submit();
    } else {
    	alert('キャンセルされました。');
    }
}