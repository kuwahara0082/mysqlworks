function fnSubmit() {
        var name = document.getElementById("name");
        name.style.backgroundColor = "";
        var comment = document.getElementById("comment");
        comment.style.backgroundColor = "";

        if(!name.value) {
            alert('名前が入力されていません。');
            name.style.backgroundColor = "#F08080";
        } else if(!comment.value) {
            alert('コメントが入力されていません。');
            comment.style.backgroundColor = "#F08080";
        } else {
	    document.form1.mode.value = 'insert';
	    document.form1.submit();
        } 
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
