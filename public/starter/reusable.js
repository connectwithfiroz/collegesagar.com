
function nDigit(e, limit = 10) {
  const inputValue = e.value;
  const sanitizedValue = inputValue.replace(/\D/g, ''); // Remove non-digit characters
  e.value = sanitizedValue.slice(0, limit); // Limit to 'limit' digits
}
function showPreview(event, srcEle = ''){
    if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("img-preview");
        if(srcEle != ''){
            preview = document.getElementById(srcEle);
        }
        preview.src = src;
    }
}
function fTenDigit(e, customLen = 10){
    var numbers = /^[0-9]+$/;
    if(e.value[e.value.length - 1].match(numbers)){
        console.log('true')
        if(e.value.length > customLen)
        e.value = e.value.substr(0, customLen);
    }else{
        e.value = e.value.substr(0, e.value.length-1);
    }

}

$(() => {
    ele = $(`.auto-select`);
    eleVal = ele.attr("data-value");
    $(`option[value='${eleVal}']`).attr("selected", true);
});

function confirmDelete(link) {
    var id = link.getAttribute('data-id');
    var index = link.getAttribute('data-index');

    if (confirm("Do you really want to delete this image?")) {
        // If the user confirms, redirect to the delete route
        window.location.href = "{{ route('vendor.pimage-delete') }}/" + id + "/" + index;
    }
}
function deleteConfirm(ele) {
    var href = ele.getAttribute('href');
    var msg = ele.getAttribute('data-msg') || "Do you really want to perform this action.?";

    if (confirm(msg)) {
        window.location.href = href;
    }
}
function deleteConfirm(event, ele) {
    event.preventDefault();  // Prevent default link action

    var href = ele.getAttribute('href');
    var msg = ele.getAttribute('data-msg') || "Do you really want to delete this item?";

    if (confirm(msg)) {
        window.location.href = href;  // Redirect if confirmed
    }
}

function confirmSubmit(event, msg="Do you really want to perform this action.?") {
    event.preventDefault();
        if (confirm(msg)) {
            event.target.closest('form').submit();
        }
    }

function transformString(inputString) {
  // Split the string into an array of words based on underscores
  const words = inputString.split('_');
  
  // Capitalize the first letter of each word and join them with spaces
  const capitalizedWords = words.map(word => {
      return word.charAt(0).toUpperCase() + word.slice(1);
  });

  // Join the capitalized words with spaces to form the transformed string
  const transformedString = capitalizedWords.join(' ');

  return transformedString;
}

function showErrorsInToast(errors) {
	errors.forEach(element => {
    toastr.error(`${transformString(Object.keys(element)[0])} - ${Object.values(element)[0]}`);
	});	
}

function showValidationError(errors, current) {
	//REMOVE was-validate CLASS FIRST
	current.classList.remove('was-validated');
	//remove all invalid class inititally
	let formElements = [];
	let errorElements = [];
	document.querySelectorAll(`#${current.getAttribute('id')} input, #${current.getAttribute('id')} select, #${current.getAttribute('id')} textarea`).forEach((e, i) => {
		formElements.push(e.getAttribute('name'));
	});

	//GET THE KEYS FROM ERRORS
	errors.forEach(element => {
		errorElements.push(Object.keys(element)[0]);
	});


	formElements.forEach((e, i) => {
		//CHECK IS ELEMENT KEY IS IN ERROR IF YES THEN ADD INVALID OR ADD VALID CLASS. IF ALREADY INVALID ADDED THEN REMOVE THEN ADD VALID CLASS
		if (errorElements.includes(e)) {
			$(`[name='${e}']`).removeClass('is-valid');
			$(`[name='${e}']`).addClass('is-invalid');
		} else {
			$(`[name='${e}']`).removeClass('is-invalid');
			$(`[name='${e}']`).addClass('is-valid');
		}
	})
	
}

function setFormValue(obj){
  Object.keys(obj).forEach(key => {
    ele = document.querySelector(`#${key}`);
    if(!ele){
      ele = document.querySelector(`[name='${key}']`);
    }
    // console.log(key)
    if(ele){
        if(['SELECT', 'INPUT'].includes(ele.tagName)){
          if(ele.type == 'radio' || ele.type == 'checkbox'){
              radioButtons = document.querySelectorAll(`[name='${key}']`);
              for (let i = 0; i < radioButtons.length; i++) {
                  // console.log(radioButtons[i].value)
                  if (radioButtons[i].value === obj[key]) {
                      radioButtons[i].checked = true;
                      break; // Once found, exit the loop
                  }
              }
          }else{
              ele.value = obj[key];
          }
        }else if(ele.tagName == 'TEXTAREA'){
          ele.innerText = obj[key];
        }
    }

  });
}

function copyToClipboard(url) {
    navigator.clipboard.writeText(url).then(() => {
        toastr.success('Menu URL copied!');
    });
}
async function shareUrl(title = "Link Share", url){
    if (navigator.share) {
            try {
                await navigator.share({
                    title: title,
                    text: url,
                });
                alert("Shared successfully!");
            } catch (error) {
                console.error("Error sharing:", error);
                alert("Error sharing content.");
            }
        } else {
            alert("Sharing is not supported on this device.");
        }
}
function showLoader(ele){
  $(ele).html(`<div class="loaderContainer" style="background:#f1f1f1;">
  <span class="loader"></span>
</div>`);
}
function showLoaderInButton(ele){
  $(ele).css('cursor', 'not-allowed');
  $(ele).prop('disabled', true);
  $(ele).html(`<div class="spinner-border text-dark" role="status">
</div>`);
}
function hideLoaderInButton(ele, btn_content='Save'){
  $(ele).css('cursor', 'pointer');
  $(ele).prop('disabled', false);
  $(ele).html(btn_content);
}
function showLoaderInEle($ele){
  if(!$ele) return;
  $ele.css('cursor', 'not-allowed');
  $ele.prop('disabled', true);
  $ele.html(`<div class="spinner-border text-dark" role="status">
</div>`);
}
function hideLoaderIEle($ele, btn_content='Save'){
  if(!$ele) return;
  $ele.css('cursor', 'pointer');
  $ele.prop('disabled', false);
  $ele.html(btn_content);
}
function showSpinner(ele){
  $(ele).html(`<div style="width:100%; height:100%;display: flex;justify-content: center;align-items: center;"><div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div></div>`);
}