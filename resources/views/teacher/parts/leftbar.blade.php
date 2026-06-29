	<div class="sidebar-wrapper" data-simplebar="true">
		<div class="sidebar-header">
			<div>
				<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
			</div>
			<div>
				<h4 class="logo-text">EduManage</h4>
			</div>
			<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
			</div>
		</div>
		<!--navigation-->
		<ul class="metismenu" id="menu">
			<li>
				<a href="{{ route('teacher.dashboard') }}">
					<div class="parent-icon"><i class='bx bx-home-alt'></i></div>
					<div class="menu-title">Dashboard</div>
				</a>
			</li>
			<li class="menu-label">My Classes</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-book-open'></i></div>
					<div class="menu-title">Courses</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>My Courses</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Upload Materials</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Assignments</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-check-circle'></i></div>
					<div class="menu-title">Attendance</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Mark Attendance</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Attendance Reports</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-edit-alt'></i></div>
					<div class="menu-title">Examinations</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Create Exam</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Enter Results</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Grade Students</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-group'></i></div>
					<div class="menu-title">Students</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>My Students</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Student Progress</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-calendar'></i></div>
					<div class="menu-title">Schedule</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>My Timetable</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Academic Calendar</a></li>
				</ul>
			</li>
			<li class="menu-label">Communication</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-notification'></i></div>
					<div class="menu-title">Notices</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Notice Board</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Post Notice</a></li>
				</ul>
			</li>
			<li>
				<a href="javascript:;" class="has-arrow">
					<div class="parent-icon"><i class='bx bx-envelope'></i></div>
					<div class="menu-title">Messages</div>
				</a>
				<ul>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Inbox</a></li>
					<li><a href="#"><i class="bx bx-radio-circle"></i>Send Message</a></li>
				</ul>
			</li>
			<li class="menu-label">Profile</li>
			<li>
				<a href="#">
					<div class="parent-icon"><i class="bx bx-user-circle"></i></div>
					<div class="menu-title">My Profile</div>
				</a>
			</li>
			<li>
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-teacher').submit();">
					<div class="parent-icon"><i class='bx bx-log-out'></i></div>
					<div class="menu-title">Logout</div>
				</a>
				<form id="logout-form-teacher" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
			</li>
		</ul>
		<!--end navigation-->
	</div>
