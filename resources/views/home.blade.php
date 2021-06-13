@extends('layouts.app')
@section('content')
 
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Table-->
        <section class="page-section" id="services">
            <div class="container">
                <form action="" method="post">
                    <table class="table table-striped" id="list">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            </tr>
                        </thead>
                        
                    </table>
                </form>
            
            </div>
        </section>
        
           
        </section>
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
        <!-- Contact form JS-->
        <!--
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        -->
        <!-- Core theme JS-->
        <script src="js/scripts.js" type="text/javascript"></script>

        <script type="text/javascript">
        
            $(document).ready(function() {
                $.noConflict();
                $.ajaxSetup({
                    headers: { 
                        "Authorization": "Bearer qwertyuiop"         
                    }
                });
                $.ajax({
                    url: 'https://ignite-careers.com/test/endpoint.php',
                    type: 'POST',
                    contentType: 'application/json',
                    dataType: 'json',
                    data: JSON.stringify({
                        jobId: 10
                    })
                })
                    .done(function(data) {
                        console.log(data)

                        $('#list').DataTable({
                            data: data.data,
                            dom: 'Bfrtip',
                            buttons: [
                                'csv'
                            ],
                            columns: [
                                { data: 'email' },
                                { data: 'email' },
                                { data: 'first_name' },
                                { data: 'last_name' },
                                { data: 'mobile' }
                            ]
                        });
                    })
            })
        </script>
@endsection
