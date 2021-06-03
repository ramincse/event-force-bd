
(function ($) {
    $(document).ready(function () {
        $('#sidebar-menu ul li ul li.ok').parent('ul').slideDown();
        $('#sidebar-menu ul li ul li.ok a').css('color', '#20e3ff');
        $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').css('background-color', '#19c1dc');
        $('#sidebar-menu ul li ul li.ok').parent('ul').parent('li').children('a').addClass('subdrop');

        /**
         * Logout Button
         */
        $(document).on('click', '#logout_btn', function (e) {
            e.preventDefault();
            $('#logout_form').submit();
        });

        /**
         * Settings
         */
         $(document).on('change', '#logo_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#logo_photo_load').attr('src', file_url);
         });
        //Favicon Icon
        $(document).on('change', '#favicon_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#favicon_photo_load').attr('src', file_url);
        });

        /**
         * Gallery
         */
        $(document).on('change', '#gallery_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#gallery_photo_load').attr('src', file_url);
        });

        $(document).on('click', '.edit_gallery', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: '/event/gallery/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_gallery_modal form input[name="id"]').val(data.id);
                    $('#update_gallery_modal form input[name="title"]').val(data.title);
                    $('#update_gallery_modal img#gallery_new_photo_load').attr('src', '/media/gallery/' + data.photo);
                    $('#update_gallery_modal').modal('show');
                }
            });
        });

        $(document).on('change', '#gallery_new_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#gallery_new_photo_load').attr('src', file_url);
        });

        /**
         * Clients
         */
         $(document).on('change', '#client_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#client_photo_load').attr('src', file_url);
        });

        $(document).on('click', '.edit_client', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: '/event/client/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_client_modal form input[name="id"]').val(data.id);
                    $('#update_client_modal form input[name="title"]').val(data.title);
                    $('#update_client_modal img#client_new_photo_load').attr('src', '/media/clients/' + data.photo);
                    $('#update_client_modal').modal('show');
                }
            });
        });

        $(document).on('change', '#client_new_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#client_new_photo_load').attr('src', file_url);
        });


        /**
         * Sliders
         */
        //Slider Image Load
        $(document).on('change', '#slider_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#slider_photo_load').attr('src', file_url);
        });

        //Slider Update Image Load
        $(document).on('change', '#slider_new_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#slider_new_photo_load').attr('src', file_url);
        });

        //Slider Edit
        $(document).on('click', '.edit_slider', function(e){
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'slider/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_slider_modal form input[name="id"]').val(data.id);
                    $('#update_slider_modal form input[name="title"]').val(data.title);
                    $('#update_slider_modal img#slider_new_photo_load').attr('src', 'media/sliders/' + data.photo);
                    $('#update_slider_modal').modal('show');
                }
            });
        });

        /**
         * Events Concern
         */
        //Event Image Load
        $(document).on('change', '#events_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#events_photo_load').attr('src', file_url);
        });

        //Slider Update Image Load
        $(document).on('change', '#events_new_photo', function (e) {
            e.preventDefault();

            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#events_new_photo_load').attr('src', file_url);
        });

        //Slider Edit
        $(document).on('click', '.edit_events', function(e){
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'events/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_events_modal form input[name="id"]').val(data.id);
                    $('#update_events_modal form input[name="title"]').val(data.title);
                    $('#update_events_modal img#events_new_photo_load').attr('src', 'media/events/' + data.photo);
                    $('#update_events_modal').modal('show');
                }
            });
        });

        /**
         * About Us Top Management Image Load
         */
         $(document).on('change', '#management_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#management_photo_load').attr('src', file_url);
         });
        
        //Top Management Edit
        $(document).on('click', '.edit_management', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'about-management/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_member_modal form input[name="id"]').val(data.id);
                    $('#update_member_modal form input[name="name"]').val(data.name);
                    $('#update_member_modal form input[name="job"]').val(data.job);
                    $('#update_member_modal img#management_new_photo_load').attr('src', 'media/top_management/' + data.photo);
                    $('#update_member_modal').modal('show');
                }
            });
        });
        

        /**
         * About Us Director
         */
        //Message Image Load
         $(document).on('change', '#message_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#message_photo_load').attr('src', file_url);
         });
        
        //Director Message Edit
        $(document).on('click', '.edit_message', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: 'about-vice/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_message_modal form input[name="id"]').val(data.id);
                    $('#update_message_modal form input[name="name"]').val(data.name);
                    $('#update_message_modal form textarea[name="content"]').text(data.content);
                    $('#update_message_modal img#message_new_photo_load').attr('src', 'media/message/' + data.photo);
                    $('#update_message_modal').modal('show');
                }
            });
        });
        
        /**
         * About Us Director Update Image Load
         */
         $(document).on('change', '#message_new_photo', function (e) {
            e.preventDefault();
            let file_url = URL.createObjectURL(e.target.files[0]);
            $('img#message_new_photo_load').attr('src', file_url);
         });
        
        









    });
})(jQuery)