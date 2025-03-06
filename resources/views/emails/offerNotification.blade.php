<!-- resources/views/emails/offerNotification.blade.php -->
<p>Dear Admin,</p>
<p>The notification for the offer "{{ $offer->name }}" has expired. Please check the details below:</p>
<p>Offer Name: {{ $offer->name }}</p>
<p>Offer Expiry Date: {{ $offer->expiry_date }}</p>

