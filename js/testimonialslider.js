// Array of testimonial objects with quote and author
const testimonials = [
    {
      quote: 'The CARISCA Summit had a really great mix of attendees who were all so excited to be there and passionate about the topic.', 
      author: 'MICHELLE L’ARCHEVEQUE JONES',
      role: 'SENIOR SCIENCE & RESEARCH PROGRAM MANAGER',
      organisation: ' US AGENCY FOR INTERNATIONAL DEVELOPMENT (USAID)',
      extra: 'WASHINGTON, D.C',
      image: 'images/photos/michelle.jpg'
    },
    {
      quote: 'What really stood out were the discussions post presentations, the groundwork being done by the Innovation Lab, the collaboration work between academics and practitioners – really inspiring work.',
      author: 'ASSILAH AGIGI',
      role: 'LECTURER',
      organisation: 'UNIVERSITY OF PRETORIA, SOUTH AFRICA',
      extra: '2021 PHD DISSERTATION AWARD WINNER',
      image: 'images/photos/assilah.jpg' 
    },
    {
      quote: 'The speakers were the crème de la crème in the various fields, which provided us with in-depth knowledge. I must confess, CARISCA has organized the best event I have ever attended.',
      author: 'TIMOTHY ASAAM',
      role: 'OWNER',
      organisation: 'BESIGHEID INVESTMENT',
      extra: 'ACCRA, GHANA',
      image: 'images/photos/asaam.jpg'
    },
    {
      quote: 'It addresses real issues on supply chain. The breakaway topics are very timely. It gets better every year.',
      author: 'RACHEL APIO',
      role: 'SUPPLY CHAIN MANAGER',
      organisation: 'PROGRAM FOR ACCESSIBLE HEALTH COMMUNICATION AND EDUCATION (PACE)',
      extra: 'KAMPALA, UGANDA',
      image: 'images/photos/apio.jpg'
    }
  ];

  
  let currentTestimonial = 0;
  
  // Function to update the DOM with the next testimonial
  function updateTestimonial() {
    document.getElementById('testimonial-quote').innerText = testimonials[currentTestimonial].quote;
    document.getElementById('testimonial-author').innerText = testimonials[currentTestimonial].author;
    document.getElementById('testimonial-role').innerText = testimonials[currentTestimonial].role;
    document.getElementById('testimonial-organisation').innerText = testimonials[currentTestimonial].organisation;
    document.getElementById('testimonial-extra').innerText = testimonials[currentTestimonial].extra;
    document.getElementById('testimonial-image').src = testimonials[currentTestimonial].image;
    
    currentTestimonial++;
    if(currentTestimonial >= testimonials.length) {
      currentTestimonial = 0; 
    }
  }
  
  // Call the updateTestimonial function every 5 seconds
  setInterval(updateTestimonial, 10000);