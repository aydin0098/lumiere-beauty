import { useEffect } from 'react';

export default function BookingModal({ open, service, onClose }) {
  useEffect(() => {
    if (!open) return;
    const onKeyDown = (event) => event.key === 'Escape' && onClose();
    document.addEventListener('keydown', onKeyDown);
    return () => document.removeEventListener('keydown', onKeyDown);
  }, [open, onClose]);

  if (!open) return null;

  return (
    <div className="booking-modal__backdrop" onMouseDown={onClose}>
      <div className="booking-modal" onMouseDown={(event) => event.stopPropagation()} dir="rtl">
        <button type="button" onClick={onClose} aria-label="بستن">×</button>
        <h2>رزرو نوبت</h2>
        {service && <p>خدمت انتخاب‌شده: {service.title}</p>}
        <form>
          <input name="name" placeholder="نام و نام خانوادگی" required />
          <input name="phone" placeholder="شماره تماس" required />
          <input name="date" type="date" required />
          <textarea name="message" placeholder="توضیحات شما" />
          <button type="submit">ثبت درخواست</button>
        </form>
      </div>
    </div>
  );
}
