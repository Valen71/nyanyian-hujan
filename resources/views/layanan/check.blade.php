<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cek Pesan - Nyanyian Hujan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f5f9;
            color: #0f172a;
        }

        .container {
            width: 90%;
            max-width: 850px;
            margin: 50px auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #0284c7;
            text-decoration: none;
            font-weight: bold;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }

        h1 {
            margin-bottom: 10px;
            color: #0f172a;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #0284c7;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: #0284c7;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #0369a1;
        }

        .message-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
        }

        .label {
            display: block;
            font-size: 13px;
            font-weight: bold;
            color: #64748b;
            margin-bottom: 7px;
        }

        .message {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    padding: 15px 16px;
    border-radius: 10px;
    margin-top: 8px;
    margin-bottom: 20px;
    color: #334155;
    line-height: 1.6;
    font-size: 14px;
    white-space: pre-wrap;
    overflow-wrap: anywhere;
    word-break: break-word;
}

        .reply {
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    padding: 15px 16px;
    border-radius: 10px;
    margin-top: 8px;
    color: #1e3a8a;
    line-height: 1.6;
    font-size: 14px;
    white-space: pre-wrap;
    overflow-wrap: anywhere;
    word-break: break-word;
}

        .no-reply {
            background: #fef3c7;
            color: #92400e;
            padding: 15px;
            border-radius: 10px;
        }

        .status {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .status-replied {
            background: #dcfce7;
            color: #166534;
        }

        .status-read {
            background: #e0f2fe;
            color: #075985;
        }

        .status-unread {
            background: #fef3c7;
            color: #92400e;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-bottom: 15px;
        }

        @media (max-width: 600px) {
            .container {
                width: 94%;
                margin: 25px auto;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ url('/layanan') }}" class="back">
        ← Kembali ke Layanan
    </a>

    <div class="card">

        <h1>Cek Pesan Customer</h1>
        @if(request()->hasAny(['customer_email', 'customer_phone']) && $unreadReplies > 0)

    <div style="
        background: #dcfce7;
        color: #166534;
        border: 1px solid #86efac;
        padding: 15px;
        border-radius: 10px;
        margin-top: 15px;
        margin-bottom: 20px;
        font-weight: bold;
    ">
        🔔 Admin sudah membalas {{ $unreadReplies }} pesan kamu.
    </div>

@endif

        <p class="subtitle">
            Masukkan email atau nomor WhatsApp yang kamu gunakan saat mengirim pesan.
        </p>

      <form
    action="{{ route('customer.message.check') }}"
    method="GET"
>

    <p style="
        margin-bottom: 15px;
        color: #64748b;
        font-size: 14px;
        line-height: 1.5;
    ">
        Masukkan salah satu data yang kamu gunakan saat mengirim pesan.
    </p>

    <input
        type="email"
        name="customer_email"
        placeholder="Email kamu"
        value="{{ request('customer_email') }}"
    >

    <div style="
        text-align: center;
        margin: 5px 0;
        color: #94a3b8;
        font-size: 13px;
    ">
        atau
    </div>

    <input
        type="text"
        name="customer_phone"
        placeholder="Nomor WhatsApp kamu"
        value="{{ request('customer_phone') }}"
    >

    @error('customer_email')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

    @error('customer_phone')
        <div class="error">
            {{ $message }}
        </div>
    @enderror

    <button type="submit">
        🔎 Cek Pesan
    </button>

</form>

</div>


    @if(request()->hasAny(['customer_email', 'customer_phone']))

        <div class="card">

            <h1>Pesan Saya</h1>

            @if($messages->count() > 0)

                @foreach($messages as $message)

                    <div class="message-card">

                        @if($message->status === 'replied')

                            <span class="status status-replied">
                                Sudah Dibalas
                            </span>

                        @elseif($message->status === 'read')

                            <span class="status status-read">
                                Sudah Dibaca
                            </span>

                        @else

                            <span class="status status-unread">
                                Belum Dibaca
                            </span>

                        @endif


                        <span class="label">
                            Pesan Kamu
                        </span>

                        <div class="message">{{ trim($message->message) }}</div>


                        @if($message->admin_reply)

                            <span class="label">
                                Balasan Admin
                            </span>

                            <div class="reply">{{ trim($message->admin_reply) }}</div>

                            @if($message->replied_at)

                                <small style="display:block; margin-top:10px; color:#64748b;">
                                    Dibalas pada
                                    {{ $message->replied_at->format('d/m/Y H:i') }}
                                    WIB
                                </small>

                            @endif

                        @else

                            <div class="no-reply">
                                ⏳ Pesan kamu sudah diterima.
                                Admin belum memberikan balasan.
                            </div>

                        @endif

                    </div>

                @endforeach

            @else

                <div class="no-reply">
                    Pesan tidak ditemukan.
                    Pastikan email atau nomor WhatsApp yang kamu masukkan benar.
                </div>

            @endif

        </div>

            @endif
            <div style="
    margin-top: 30px;
    padding: 20px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    text-align: center;
">

    <div style="
        font-size: 28px;
        margin-bottom: 8px;
    ">
        📱
    </div>

    <h3 style="
        margin: 0 0 8px;
        color: #0f172a;
        font-size: 18px;
    ">
        Butuh Bantuan Lebih Cepat?
    </h3>

    <p style="
        margin: 0 0 15px;
        color: #64748b;
        font-size: 14px;
        line-height: 1.6;
    ">
        Hubungi Admin Nyanyian Hujan melalui WhatsApp
        untuk mendapatkan bantuan lebih cepat.
    </p>

    <a
        href="https://wa.me/6285188501511"
        target="_blank"
        style="
            display: inline-block;
            padding: 11px 18px;
            border-radius: 10px;
            background: #22c55e;
            color: white;
            text-decoration: none;
            font-weight: 600;
        "
    >
        💬 Chat WhatsApp Admin
    </a>

</div>
        <div style="text-align: center; margin-top: 25px;">

            <a
                href="{{ url('/layanan') }}"
                style="
                    display: inline-block;
                    padding: 12px 20px;
                    border-radius: 10px;
                    background: #0f172a;
                    color: white;
                    text-decoration: none;
                    font-weight: bold;
                "
            >
                ← Kembali ke Layanan
            </a>

        </div>
</div>

</body>
</html>