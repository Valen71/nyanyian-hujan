<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pesan Customer - Nyanyian Hujan</title>

    <style>

/* =========================================================
   Nyanyian Hujan
   CUSTOMER MESSAGE DETAIL
   STYLE MATCH DENGAN CEK BOOKING
   ========================================================= */

* {
    box-sizing: border-box;
}

html {
    min-height: 100%;
}

body {
    margin: 0;
    min-height: 100vh;

    font-family: 'Montserrat', Arial, sans-serif;

    color: #ecfaff;

    background:
        radial-gradient(
            circle at top left,
            rgba(0, 217, 255, .10),
            transparent 28%
        ),
        radial-gradient(
            circle at bottom right,
            rgba(0, 128, 170, .16),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #04141f,
            #061d2a 55%,
            #031018
        );

    overflow-x: hidden;
}


/* =========================================================
   BACKGROUND GRID
   SAMA SEPERTI CEK BOOKING
   ========================================================= */

body::before {
    content: "";

    position: fixed;

    inset: 0;

    pointer-events: none;

    background:
        linear-gradient(
            rgba(255,255,255,.018) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.018) 1px,
            transparent 1px
        );

    background-size: 45px 45px;

    mask-image:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.45),
            transparent
        );

    -webkit-mask-image:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.45),
            transparent
        );

    z-index: -1;
}


/* =========================================================
   NAVBAR
   ========================================================= */

.navbar {
    width: 100%;

    min-height: 72px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 0 40px;

    background:
        rgba(3, 17, 27, .78);

    border-bottom:
        1px solid rgba(0, 217, 255, .14);

    backdrop-filter: blur(18px);

    -webkit-backdrop-filter: blur(18px);

    box-shadow:
        0 12px 35px rgba(0,0,0,.25);
}


/* LOGO */

.logo {
    color: #ffffff !important;

    text-decoration: none;

    font-size: 21px;

    font-weight: 800;

    letter-spacing: .6px;
}

.logo span {
    color: #00d9ff;
}


/* KEMBALI KE PESAN */

.navbar .back {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: #a9dce7;

    text-decoration: none;

    font-size: 13px;

    font-weight: 700;

    padding: 10px 15px;

    border:
        1px solid rgba(0,217,255,.16);

    border-radius: 9px;

    background:
        rgba(255,255,255,.035);

    transition: .2s ease;
}

.navbar .back:hover {
    color: #ffffff;

    background:
        rgba(0,217,255,.09);

    border-color:
        rgba(0,217,255,.38);

    transform: translateY(-1px);
}


/* =========================================================
   CONTENT
   ========================================================= */

.container {
    width: min(
        920px,
        calc(100% - 40px)
    );

    margin:
        55px auto 80px;
}


/* =========================================================
   TITLE
   ========================================================= */

.title {
    margin-bottom: 28px;
}

.title h1 {
    margin: 0;

    color: #ffffff;

    font-size: 30px;

    line-height: 1.2;

    font-weight: 800;

    letter-spacing: -.5px;
}

.title p {
    margin-top: 9px !important;

    margin-bottom: 0;

    color: #9fc4ce !important;

    font-size: 15px !important;

    line-height: 1.7;
}


/* =========================================================
   MAIN CARD
   ========================================================= */

.card {
    width: 100%;

    padding: 30px;

    background:
        linear-gradient(
            145deg,
            rgba(8,34,47,.88),
            rgba(3,19,29,.94)
        );

    border:
        1px solid rgba(0,217,255,.15);

    border-radius: 22px;

    box-shadow:
        0 25px 70px rgba(0,0,0,.32),
        inset 0 1px 0 rgba(255,255,255,.035);

    backdrop-filter: blur(18px);

    -webkit-backdrop-filter: blur(18px);
}


/* =========================================================
   CUSTOMER INFO
   ========================================================= */

.customer {
    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 14px;

    margin-bottom: 28px;
}

.info {
    min-height: 95px;

    padding: 18px;

    background:
        rgba(2,17,26,.58);

    border:
        1px solid rgba(0,217,255,.10);

    border-radius: 14px;

    transition: .2s ease;
}

.info:hover {
    border-color:
        rgba(0,217,255,.22);

    background:
        rgba(3,23,34,.68);
}


/* LABEL */

.info .label {
    display: block;

    margin-bottom: 9px;

    color: #6f9ca8;

    font-size: 11px;

    line-height: 1.3;

    font-weight: 800;

    letter-spacing: 1.2px;

    text-transform: uppercase;
}


/* VALUE */

.info .value {
    display: block;

    color: #e9fbff;

    font-size: 15px;

    line-height: 1.55;

    font-weight: 700;

    word-break: break-word;
}


/* =========================================================
   MESSAGE
   ========================================================= */

.message-box {
    margin-top: 5px;

    padding-top: 26px;

    border-top:
        1px solid rgba(0,217,255,.10);
}

.message-box h3 {
    margin: 0 0 13px;

    color: #ffffff;

    font-size: 18px;

    font-weight: 800;
}

.message {
    min-height: 130px;

    padding: 20px;

    color: #d9f2f7;

    background:
        rgba(1,15,23,.72);

    border:
        1px solid rgba(0,217,255,.12);

    border-radius: 14px;

    font-size: 15px;

    line-height: 1.85;

    white-space: pre-wrap;

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.02);
}


/* =========================================================
   STATUS
   ========================================================= */

.status-box {
    margin-top: 20px;

    padding: 17px 20px;

    color: #ccecf2;

    background:
        rgba(2,17,26,.58);

    border:
        1px solid rgba(0,217,255,.10);

    border-radius: 13px;

    font-size: 14px;

    line-height: 1.6;
}

.status-box strong {
    margin-right: 5px;

    color: #6f9ca8;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1px;

    text-transform: uppercase;
}


/* =========================================================
   SUCCESS MESSAGE
   ========================================================= */

.success-message {
    margin-top: 18px;

    margin-bottom: 20px;

    padding: 15px 18px;

    background:
        rgba(0,217,255,.07) !important;

    border:
        1px solid rgba(0,217,255,.20) !important;

    border-radius: 12px;

    color: #c9f6ff !important;

    font-size: 14px;

    line-height: 1.6;

    box-shadow:
        0 8px 25px rgba(0,0,0,.12);
}


/* SUCCESS BOX INLINE
   Menimpa style hijau lama */

.reply-box > div[style] {
    margin-bottom: 20px !important;

    padding: 15px 18px !important;

    background:
        rgba(0,217,255,.07) !important;

    border:
        1px solid rgba(0,217,255,.20) !important;

    border-radius: 12px !important;

    color: #c9f6ff !important;

    font-size: 14px !important;

    line-height: 1.6 !important;
}


/* =========================================================
   REPLY SECTION
   ========================================================= */

.reply-box {
    margin-top: 28px;

    padding-top: 28px;

    border-top:
        1px solid rgba(0,217,255,.10);
}

.reply-box h3 {
    margin: 0 0 8px;

    color: #ffffff;

    font-size: 20px;

    line-height: 1.3;

    font-weight: 800;
}


/* EXISTING REPLY */

.existing-reply {
    margin:
        20px 0;

    padding: 19px;

    background:
        rgba(0,217,255,.045);

    border:
        1px solid rgba(0,217,255,.14);

    border-radius: 14px;
}

.reply-label {
    display: block;

    margin-bottom: 10px;

    color: #6f9ca8;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1px;

    text-transform: uppercase;
}

.existing-reply p {
    margin: 0;

    color: #dff7fb;

    font-size: 15px;

    line-height: 1.8;
}

.existing-reply small {
    display: block;

    margin-top: 12px;

    color: #6e9aa5;

    font-size: 12px;
}


/* =========================================================
   TEXTAREA
   ========================================================= */

.reply-box textarea {
    display: block;

    width: 100%;

    min-height: 160px;

    margin: 18px 0 10px;

    padding: 17px 18px;

    resize: vertical;

    outline: none;

    border:
        1px solid rgba(0,217,255,.14);

    border-radius: 14px;

    background:
        rgba(1,15,23,.75);

    color: #ecfaff;

    font-family:
        'Montserrat',
        Arial,
        sans-serif;

    font-size: 15px;

    line-height: 1.7;

    transition: .25s ease;
}

.reply-box textarea::placeholder {
    color: #52727b;
}

.reply-box textarea:focus {
    border-color:
        rgba(0,217,255,.55);

    box-shadow:
        0 0 0 3px rgba(0,217,255,.08),
        0 10px 35px rgba(0,0,0,.20);
}


/* =========================================================
   ERROR
   ========================================================= */

.error-message {
    margin:
        8px 0 14px;

    color: #ff9c9c;

    font-size: 13px;

    line-height: 1.5;
}


/* =========================================================
   BUTTON UMUM
   ========================================================= */

.button {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    min-height: 44px;

    padding:
        0 20px;

    border-radius: 10px;

    font-family:
        'Montserrat',
        Arial,
        sans-serif;

    font-size: 13px;

    font-weight: 800;

    text-decoration: none;

    cursor: pointer;

    transition:
        transform .2s ease,
        box-shadow .2s ease,
        background .2s ease,
        border-color .2s ease;

    border: 1px solid transparent;
}


/* =========================================================
   PRIMARY
   ========================================================= */

.primary {
    color: #02151d;

    background:
        linear-gradient(
            135deg,
            #00d9ff,
            #00aeca
        );

    border-color:
        rgba(0,217,255,.65);

    box-shadow:
        0 8px 25px rgba(0,217,255,.12);
}

.primary:hover {
    color: #01151c;

    transform:
        translateY(-2px);

    box-shadow:
        0 12px 32px rgba(0,217,255,.22);
}


/* =========================================================
   SECONDARY / KEMBALI
   ========================================================= */

.secondary {
    color: #bfeaf2;

    background:
        rgba(255,255,255,.045);

    border:
        1px solid rgba(0,217,255,.18);

    box-shadow:
        0 8px 25px rgba(0,0,0,.15);
}

.secondary:hover {
    color: #ffffff;

    background:
        rgba(0,217,255,.09);

    border-color:
        rgba(0,217,255,.40);

    transform:
        translateY(-2px);

    box-shadow:
        0 10px 30px rgba(0,217,255,.10);
}


/* =========================================================
   ACTIONS
   ========================================================= */

.actions {
    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 12px;

    margin-top: 28px;

    padding-top: 25px;

    border-top:
        1px solid rgba(0,217,255,.10);
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 768px) {

    .navbar {
        min-height: 65px;

        padding:
            0 18px;
    }

    .logo {
        font-size: 18px;
    }

    .navbar .back {
        font-size: 11px;

        padding:
            8px 10px;
    }

    .container {
        width:
            calc(100% - 24px);

        margin:
            30px auto 50px;
    }

    .title h1 {
        font-size: 25px;
    }

    .title p {
        font-size: 14px !important;
    }

    .card {
        padding: 20px;

        border-radius: 18px;
    }

    .customer {
        grid-template-columns: 1fr;

        gap: 12px;
    }

    .info {
        min-height: auto;
    }

    .actions {
        flex-direction: column;

        align-items: stretch;
    }

    .button {
        width: 100%;
    }
}

</style>

</head>

<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <a
            href="{{ route('admin.dashboard') }}"
            class="logo"
        >
            NYANYIAN HUJAN
        </a>

        <a
            href="{{ route('admin.customer_messages.index') }}"
            class="back"
        >
            ← Kembali ke Pesan
        </a>

    </div>


    <!-- CONTENT -->

    <div class="container">

        <div class="title">

            <h1>
    Detail Pesan Customer
</h1>

<p style="
    margin-top: 8px;
    color: #64748b;
    font-size: 14px;
">
    Berikut detail pesan yang dikirim oleh customer.
</p>
        </div>


        <div class="card">

            <div class="customer">

                <div class="info">

                    <span class="label">
                        Nama Customer
                    </span>

                    <span class="value">
                        {{ $customerMessage->customer_name }}
                    </span>

                </div>


                <div class="info">

                    <span class="label">
                        Email
                    </span>

                    <span class="value">
                        {{ $customerMessage->customer_email ?: '-' }}
                    </span>

                </div>


                <div class="info">

                    <span class="label">
                        Nomor WhatsApp
                    </span>

                    <span class="value">
                        {{ $customerMessage->customer_phone ?: '-' }}
                    </span>

                </div>


                <div class="info">

                    <span class="label">
                        Waktu Pesan
                    </span>

                    <span class="value">
                        {{ $customerMessage->created_at->format('d/m/Y H:i') }}
                    </span>

                </div>

            </div>


            <div class="message-box">

                <h3>
                    Isi Pesan
                </h3>

                <div class="message">
                    {{ $customerMessage->message }}
                </div>

            </div>


            <div class="status-box">

                <strong>
                    Status:
                </strong>

                @if ($customerMessage->status === 'unread')

                    Belum Dibaca

                @elseif ($customerMessage->status === 'read')

                    Sudah Dibaca

                @elseif ($customerMessage->status === 'replied')

                    Sudah Dibalas

                @endif

            </div>

            @if (session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
@endif

<div class="reply-box">

    <h3>Balas Pesan Customer</h3>

    @if ($customerMessage->admin_reply)

        <div class="existing-reply">
            <span class="reply-label">Balasan Admin</span>

            <p>{{ $customerMessage->admin_reply }}</p>

            @if ($customerMessage->replied_at)
                <small>
                    Dibalas pada
                    {{ $customerMessage->replied_at->format('d/m/Y H:i') }}
                </small>
            @endif
        </div>

    @endif
    
    @if (session('success'))
    <div style="
        margin-bottom: 20px;
        padding: 14px 16px;
        background: #dcfce7;
        border: 1px solid #86efac;
        border-radius: 10px;
        color: #166534;
        font-size: 14px;
    ">
        ✅ {{ session('success') }}
    </div>
@endif

    <form
        action="{{ route('admin.customer_messages.reply', $customerMessage) }}"
        method="POST"
    >

        @csrf

        <textarea
            name="admin_reply"
            rows="5"
            placeholder="Tulis balasan untuk customer..."
            required
        >{{ old('admin_reply') }}</textarea>

        @error('admin_reply')
            <div class="error-message">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="button primary">
            💬 Kirim Balasan
        </button>

    </form>

</div>
            <div class="actions">

                <a
                    href="{{ route('admin.customer_messages.index') }}"
                    class="button secondary"
                >
                    ← Kembali
                </a>

                @if ($customerMessage->customer_phone && $customerMessage->admin_reply)

    @php
        $phone = preg_replace('/[^0-9]/', '', $customerMessage->customer_phone);

        $whatsappMessage =
            "Halo {$customerMessage->customer_name},\n\n" .
            "Terima kasih sudah menghubungi Nyanyian Hujan.\n\n" .
            "Balasan dari Admin:\n" .
            "{$customerMessage->admin_reply}\n\n" .
            "Salam,\n" .
            "Nyanyian Hujan";
    @endphp

    <a
        href="https://wa.me/{{ $phone }}?text={{ urlencode($whatsappMessage) }}"
        target="_blank"
        class="button primary"
    >
    💬 Kirim Balasan ke WhatsApp Customer
</a>

@endif
            </div>

        </div>

    </div>

</body>

</html>

