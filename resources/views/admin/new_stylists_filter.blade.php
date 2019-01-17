<h3 class="title-block">Всего: <span class="notification" style="background-color: #0e7e77">{{$stylists->count()}}</span></h3>
@if(isset($stylists))
    @foreach($stylists as $stylist)
        <form class="show_stylist_profile">
            {{csrf_field()}}
            <input hidden name="id" value={{$stylist->id}} />
            <button type="submit" class="admin-request__person">{{$stylist->user->name.' '.$stylist->user->second_name}}</button>
        </form>
    @endforeach
@endif

<script>
    $('.show_stylist_profile').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/show_stylist_profile',
            data: $(this).serialize(),
            success(result) {
                $('.admin-request__about').html(result);
            },
            error() {
                $('.message-error').css('display', 'block');
            },
        });
        $.ajax({
            type: 'POST',
            url: '/admin_stylist_services',
            data: $(this).serialize(),
            success(result) {
                $('.ask-question__quests').html(result);
                // $('.orders-list-links').after(result);
            },
            error() {
                $('.message-error').css('display', 'block');
            },
        });

    });
    </script>