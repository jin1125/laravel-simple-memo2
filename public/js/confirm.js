function deleteHnadle(event) {
  // submit処理（削除）を一旦ストップ
  event.preventDefault()
  if(confirm('delete?')) {
    document.getElementById('delete-form').submit()
  } else {
    alert('cancel')
  }
}