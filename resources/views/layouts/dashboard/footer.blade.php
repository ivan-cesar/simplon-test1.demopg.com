
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mozart du Code design by <a href="ivancesar.com">Ivan Cesar</a></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à partir ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à terminer votre session en cours.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <form id="logout" action="/logout" method="POST" style="display: none;">{{ csrf_field() }}</form>
               <a class="btn btn-primary" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

 
    <!-- Page level custom scripts -->
    <script src="{{asset('public/js/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('public/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/vendor/datatables/jquery.dataTables.min.js')}}"></script>


</body>

</html>