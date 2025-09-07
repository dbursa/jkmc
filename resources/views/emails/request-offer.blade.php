@component('mail::message')
# Nová poptávka z webu

**Jméno:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Telefon:** {{ $data['phone'] ?? '-' }}

---

**Zpráva:**  
{{ $data['message'] }}

@endcomponent
