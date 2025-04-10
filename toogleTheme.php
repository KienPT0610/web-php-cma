<div class="position-fixed shadow px-3 py-2 rounded-5 bottom-0 end-0 mb-4 me-4">
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" id="toggleSwitch">
    <label class="form-check-label" for="toggleSwitch">Chế độ tối</label>
  </div>
</div>
<script>
const toggleSwitch = document.getElementById('toggleSwitch');
toggleSwitch.addEventListener('change', () => {
  document.body.classList.toggle('dark-mode');
});
</script>