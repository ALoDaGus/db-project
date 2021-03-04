        <style>
            .nav{
                justify-content: center;
                display: flex;
            }
        </style>

    <nav class="nav">
        <a class="nav-link {{ Request::path() == 'home' ? 'disabled' : '' }}" href="home">Home</a>
        <a class="nav-link {{ Request::path() == 'member' ? 'disabled' : '' }}" href="member">Member</a>
        <a class="nav-link {{ Request::path() == 'member_detail' ? 'disabled' : '' }}" href="member_detail">Member Detail</a>
        <a class="nav-link {{ Request::path() == 'booking' ? 'disabled' : '' }}" href="booking">Booking</a>
        <a class="nav-link {{ Request::path() == 'room' ? 'disabled' : '' }}" href="room">Room</a>
        <a class="nav-link {{ Request::path() == 'bill' ? 'disabled' : '' }}" href="bill">Bill</a>
      </nav>
