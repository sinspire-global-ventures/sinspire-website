        <script>
			const toggleBtn = document.querySelector('.s_toggle_btn');
			const toggleBtnIcon = document.querySelector('.s_toggle_btn i');
			const dropDownMenu = document.querySelector('.s_dropdown_menu');
			
			toggleBtn.onclick = function () {
				dropDownMenu.classList.toggle('open');
				
				const isMenuOpen = dropDownMenu.classList.contains('open');
				
				toggleBtnIcon.classList = isMenuOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars';
			}
			
		</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.waypoints.min.js?v=1"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>