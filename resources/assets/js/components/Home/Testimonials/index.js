import React, { useEffect, useState } from 'react';

import './index.css';

const Testimonials = () => {
    const [clientImage1, setClientImage1] = useState('');
    const [clientImage2, setClientImage2] = useState('');
    const [clientImage3, setClientImage3] = useState('');
    const [client1, setClient1] = useState('');
    const [client2, setClient2] = useState('');
    const [client3, setClient3] = useState('');

    useEffect(() => {
        fetch('http://localhost/Apartment/public/getdata', {
            method: 'get',
            headers: {
                accept: 'application/json',
                'content-type': 'application/json'
            }
        })
            .then(res => res.json())
            .then(data => {
                setClientImage1(data.TestimonialImage1);
                setClientImage2(data.TestimonialImage2);
                setClientImage3(data.TestimonialImage3);
                setClient1(data.TestimonialClient1);
                setClient2(data.TestimonialClient2);
                setClient3(data.TestimonialClient3);
                console.log("Apartment data---------:", data)
            })
            .catch(err => console.log(err));
    }, []);

    return (
        <section className="testimonial text-center">
            <div className="container">
                <div className="heading white-heading">Testimonial</div>
                <div
                    id="testimonial4"
                    className="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                    data-ride="carousel"
                    data-pause="hover"
                    data-interval="5000"
                    data-duration="2000"
                >
                    <div className="carousel-inner" role="listbox">
                        <div className="carousel-item active">
                            <div className="testimonial4_slide">
                                <img src={`${clientImage1}`} className="img-circle img-responsive" />
                                <p>{client1}</p>
                                <h4>Client 1</h4>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <div className="testimonial4_slide">
                                <img src={`${clientImage2}`} className="img-circle img-responsive" />
                                <p>{client2}</p>
                                <h4>Client 2</h4>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <div className="testimonial4_slide">
                                <img src={`${clientImage3}`} className="img-circle img-responsive" />
                                <p>{client3}</p>
                                <h4>Jcob 3</h4>
                            </div>
                        </div>
                    </div>
                    <a className="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span className="carousel-control-prev-icon"></span>
                    </a>
                    <a className="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span className="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>
    );
};

export default Testimonials;
