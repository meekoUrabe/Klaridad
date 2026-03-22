const editBtn = document.querySelector('.edit-btn');
const profileFormSection = document.querySelector('.form-section');
const formInputs = profileFormSection
  ? profileFormSection.querySelectorAll('input, select, textarea')
  : [];
const actionButtons = document.querySelector('.action-buttons');
const saveBtn = document.querySelector('.save-btn');
const cancelBtn = document.querySelector('.cancel-btn');

if (editBtn && actionButtons && saveBtn && cancelBtn) {
  editBtn.addEventListener('click', function() {
    editBtn.classList.add('hidden');

    formInputs.forEach(function(input) {
      input.disabled = false;
    });

    actionButtons.classList.add('show');
  });

  saveBtn.addEventListener('click', function() {
    editBtn.classList.remove('hidden');

    formInputs.forEach(function(input) {
      input.disabled = true;
    });

    actionButtons.classList.remove('show');
  });

  cancelBtn.addEventListener('click', function() {
    editBtn.classList.remove('hidden');

    formInputs.forEach(function(input) {
      input.disabled = true;
    });

    actionButtons.classList.remove('show');
  });
}
