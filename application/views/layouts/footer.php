<!-- Optional JavaScript -->
<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // Progress Upload Image
    $(document).ready(function(){
        $('#uploadImage').submit(function(event){
            if($('#uploadFile1').val())
            {
                event.preventDefault();
                $(this).ajaxSubmit({
                    beforeSubmit:function(){
                        $('.progress-bar1').width('0%');
                    },
                    uploadProgress: function(event, position, total, percentageComplete)
                    {
                        $('.progress-bar1').animate({
                            width: percentageComplete + '%'
                        }, {
                            duration: 1000
                        });
                    },
                    success:function(){
                        location.reload();
                    },
                    resetForm: true
                });
            }
            return false;
        });
    });

    // Progress Upload Video 
    $(document).ready(function(){
        $('#uploadVideo').submit(function(event){
            if($('#uploadFile2').val())
            {
                event.preventDefault();
                $(this).ajaxSubmit({
                    beforeSubmit:function(){
                        $('.progress-bar2').width('0%');
                    },
                    uploadProgress: function(event, position, total, percentageComplete)
                    {
                        $('.progress-bar2').animate({
                            width: percentageComplete + '%'
                        }, {
                            duration: 1000
                        });
                    },
                    success:function(){
                        location.reload();
                    },
                    resetForm: true
                });
            }
            return false;
        });
    });
</script>
</body>

</html>