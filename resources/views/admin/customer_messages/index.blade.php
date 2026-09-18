<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pesan Customer - Nyanyian Hujan</title>

<link rel="stylesheet" href="{{ asset('css/admin-customer-messages.css') }}">

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <a href="{{ route('admin.dashboard') }}" class="logo">
        NYANYIAN HUJAN
    </a>

    <a
        href="{{ route('admin.dashboard') }}"
        class="back"
    >
        ← Kembali ke Dashboard
    </a>

</div>


<!-- CONTENT -->

<div class="container">

    <div class="header">

        <h1>

            Pesan Customer

            @php
                $unreadMessages = $messages->where('status', 'unread')->count();
            @endphp

            @if ($unreadMessages > 0)

                <span style="
                    display: inline-block;
                    margin-left: 8px;
                    padding: 5px 10px;
                    border-radius: 20px;
                    background: #ef4444;
                    color: white;
                    font-size: 13px;
                    vertical-align: middle;
                ">
                    {{ $unreadMessages }} belum dibaca
                </span>

            @endif

        </h1>

        <p>
            Lihat pesan dan pertanyaan yang dikirim oleh customer.
        </p>


        <!-- SEARCH + FILTER -->

        <form
            action="{{ route('admin.customer_messages.index') }}"
            method="GET"
            class="search-form"
        >

            <!-- FILTER STATUS -->

            <select
    name="status"
    onchange="this.form.submit()"
    style="
        padding: 12px 15px;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        outline: none;
        font-size: 14px;
        background: white;
        color: #334155;
        cursor: pointer;
    "
>
    <option value="">
        Semua Status
    </option>

    <option
        value="unread"
        @if(request('status') === 'unread') selected @endif
    >
        Belum Dibaca
    </option>

    <option
        value="read"
        @if(request('status') === 'read') selected @endif
    >
        Sudah Dibaca
    </option>

    <option
        value="replied"
        @if(request('status') === 'replied') selected @endif
    >
        Sudah Dibalas
    </option>
</select>

            <!-- SEARCH -->

            <input
                type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Cari nama, email, atau nomor WhatsApp..."
            >


            <!-- SEARCH BUTTON -->

            <button
                type="submit"
                class="search-button"
            >
                🔎 Cari
            </button>


            <!-- RESET -->

            @if(!empty($search) || !empty($status))

                <a
                    href="{{ route('admin.customer_messages.index') }}"
                    class="reset-button"
                >
                    ↻ Reset
                </a>

            @endif

        </form>

    </div>


    <div class="card">

        @if ($messages->count() > 0)

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Customer
                            </th>

                            <th>
                                Kontak
                            </th>

                            <th>
                                Pesan
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($messages as $message)

                            <tr>

                                <td>

                                    <strong>
                                        {{ $message->customer_name }}
                                    </strong>

                                </td>


                                <td>

                                    @if ($message->customer_email)

                                        <div>
                                            {{ $message->customer_email }}
                                        </div>

                                    @endif


                                    @if ($message->customer_phone)

                                        <div>
                                            {{ $message->customer_phone }}
                                        </div>

                                    @endif


                                    @if (!$message->customer_email && !$message->customer_phone)

                                        -

                                    @endif

                                </td>


                                <td>

                                    <div class="message">

                                        {{ \Illuminate\Support\Str::limit($message->message, 80) }}

                                    </div>

                                </td>


                                <td>

                                    @if ($message->status === 'unread')

                                        <span class="status unread">
                                            Belum Dibaca
                                        </span>

                                    @elseif ($message->status === 'read')

                                        <span class="status read">
                                            Sudah Dibaca
                                        </span>

                                    @elseif ($message->status === 'replied')

                                        <span class="status replied">
                                            Sudah Dibalas
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <a
                                        href="{{ route('admin.customer_messages.show', $message) }}"
                                        class="button"
                                    >
                                        Lihat Pesan
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>
<div style="
    padding: 20px;
    display: flex;
    justify-content: center;
    border-top: 1px solid #e2e8f0;
">
    {{ $messages->links() }}
</div>
        @else

            <div class="empty">

                <h3>
                    Belum Ada Pesan
                </h3>

                <p>
                    Tidak ada pesan yang sesuai dengan pencarian atau filter.
                </p>

            </div>

        @endif

    </div>

</div>

</body>

</html>

