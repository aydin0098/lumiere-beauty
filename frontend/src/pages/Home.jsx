import { useState } from 'react';
import BookingModal from '../components/BookingModal/BookingModal';

export default function Home() {
  const [booking, setBooking] = useState(null);
  return (
    <>
      <main dir="rtl">
        <header className="site-header" />
        <section className="hero" />
        <section className="services-section" />
        <section className="why-us-section" />
        <section className="gallery-section" />
        <section className="booking-cta">
          <button onClick={() => setBooking({ title: 'رزرو عمومی' })}>رزرو نوبت</button>
        </section>
        <footer className="site-footer" />
      </main>
      <BookingModal open={Boolean(booking)} service={booking} onClose={() => setBooking(null)} />
    </>
  );
}
