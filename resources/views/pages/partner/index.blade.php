@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <!-- begin page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Data Overview</h4>

                <!-- begin breadcrumb -->
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                        <li class="breadcrumb-item active">Company</li>
                    </ol>
                </div>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- begin content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Company</h4>
                    <p class="card-title-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quae.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="data-medium">Name</th>
                                <th>Report</th>
                                <th>Grade</th>
                                <th>Note</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Nomor urut -->
                                    <td>{{ $student->user->name ?? 'No Name' }}</td>
                                    <!-- Nama User dari relasi, jika null tampilkan 'No Name' -->
                                    <td>{{ $student->laporan ?? '' }}</td>
                                    <td>{{ $student->grade ?? '' }}</td>
                                    <td role="button" data-bs-toggle="modal" data-bs-target="#student{{ $student->user->id }}">
                                        <span class="text-truncate" style="display: inline-block; max-width: 10rem;">
                                            {{ $student->note ?? '' }}
                                        </span>

                                        <!-- Modal -->

                                    </td>
                                    <td>
                                        @if ($student->status == 'PENDING')
                                            <span class="badge bg-warning">PENDING</span>
                                        @elseif ($student->status == 'VERIFIED')
                                            <span class="badge bg-success">VERIFIED</span>
                                        @elseif ($student->status == 'UNVERIFIED')
                                            <span class="badge bg-danger">UNVERIFIED</span>
                                        @else
                                            <span class="badge bg-secondary">{{ $student->status ?? 'Unknown' }}</span>
                                        @endif
                                    </td>

                                    <div class="modal fade" id="student{{ $student->user->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Note</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form" action="{{ route('storeNoteStudent') }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $student->id }}">
                                                        <div class="">
                                                            <p class="fw-bolder">Tambahkan catatan untuk data berikut
                                                            </p>
                                                            <p>Nama: {{ $student->user->name }}</p>
                                                            <p>Universitas: {{ $student->user->university }}</p>
                                                        </div>
                                                        <input type="hidden" name="textarea-value" class="textarea-value"
                                                            value="{{ $student->note }}">
                                                        <textarea class="form-control" aria-label="With textarea" id="note-{{ $student->user->id }}" name="note"
                                                            placeholder="Masukkan note...">{{ $student->note }}</textarea>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tombol yang akan membuka modal -->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#confirmationModal" @if ($hasPending) disabled @endif>
                            Konfirmasi Validasi
                        </button>
                    </div>

                    <!-- Pesan jika ada status PENDING -->
                    @if ($hasPending)
                        <div class="alert alert-warning mt-2">
                            Terdapat siswa yang masih memiliki status UNVERIFIED atau belum diverifikasi. Mohon cek terlebih dahulu.
                        </div>
                    @endif
                    <!-- Modal -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Validasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Dengan ini saya mengonfirmasi bahwa saya telah melakukan cek dan menyatakan seluruh data
                                    telah sesuai.
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('verifyAllStudents') }}" method="POST">
                                        @csrf
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Ensure modal remains open when clicking inside textarea
            $('.modal').on('shown.bs.modal', function(event) {
                var modal = $(this);
                var noteValue = modal.find('.textarea-value').val();
                modal.find('textarea').val(noteValue);
            });

            // Initialize tooltip
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl))
        });
    </script>
@endsection
