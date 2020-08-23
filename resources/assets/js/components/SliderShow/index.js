import React from 'react';
import { Zoom } from 'react-slideshow-image';

const Slideshow = () => {
    const images = ['Yoga.jpg', 'slide-1.jpg', 'slide-1.jpg'];

    const zoomInProperties = {
        indicators: true,
        scale: 1.4,
    };
    return (
        <div>
            <Zoom {...zoomInProperties}>
                {images.map((each, index) => (
                    <img key={index} style={{ width: '100%' }} src={each} />
                ))}
            </Zoom>
        </div>
    );
};

export default Slideshow;
