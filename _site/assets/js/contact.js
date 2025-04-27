const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source') || 'Not specified';
document.getElementById("url-param").value = source;