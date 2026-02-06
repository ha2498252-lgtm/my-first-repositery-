<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alpha Standard Trading LLC</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    position: relative;
  }
</style>
</head>
<body>

<script>
  // ===== Contact Info Top Bar =====
  const contactInfo = document.createElement("div");
  Object.assign(contactInfo.style, {
    textAlign: "center",
    padding: "10px",
    backgroundColor: "#f0f0f0",
    borderBottom: "1px solid #ccc",
    fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
    fontSize: "14px"
  });
  contactInfo.innerHTML = `<span>Mob: +971 543770321</span> | <span><a href="mailto:info@alphastandard-uae.com" style="text-decoration:none;color:inherit;">info@alphastandard-uae.com</a></span>`;
  document.body.appendChild(contactInfo);

  // ===== Search Bar =====
  const searchContainer = document.createElement("div");
  Object.assign(searchContainer.style, {
    position: "absolute",
    top: "6.5%",
    left: "50%",
    transform: "translate(-50%, -50%)",
    display: "flex",
    alignItems: "center",
    width: "500px",
    height: "40px",
    border: "1px solid #ccc",
    borderRadius: "3px",
    overflow: "hidden",
    boxShadow: "0 1px 3px rgba(0,0,0,0.1)",
    backgroundColor: "#fff"
  });

  const select = document.createElement("select");
  const opt = document.createElement("option");
  opt.text = "All Categories";
  select.add(opt);
  Object.assign(select.style, {
    width:"140px", height:"100%", border:"none", outline:"none", fontSize:"13px", padding:"0 10px", background:"#f9f9f9", cursor:"pointer"
  });

  const input = document.createElement("input");
  input.type = "text";
  input.placeholder = "Search over 10,000 products";
  Object.assign(input.style,{flex:"1", height:"100%", border:"none", outline:"none", fontSize:"13px", padding:"0 10px", boxSizing:"border-box"});

  const searchBtn = document.createElement("button");
  searchBtn.innerHTML = "🔍";
  Object.assign(searchBtn.style,{width:"40px", height:"100%", border:"none", background:"transparent", cursor:"pointer", fontSize:"16px"});

  searchContainer.append(select, input, searchBtn);
  document.body.appendChild(searchContainer);

  // ===== Customer Service =====
  const customerDiv = document.createElement("div");
  Object.assign(customerDiv.style,{position:"absolute", top:"80px", right:"500px", fontFamily:"Arial, sans-serif", fontSize:"14px", textAlign:"right"});
  const customerLabel = document.createElement("div");
  customerLabel.textContent = "Customer Service";
  customerLabel.style.color = "red";
  const customerPhone = document.createElement("div");
  customerPhone.textContent = "+971 543770321";
  customerPhone.style.color = "#333";
  customerDiv.append(customerLabel, customerPhone);
  document.body.appendChild(customerDiv);

  // ===== Navbar =====
  const navbar = document.createElement("div");
  Object.assign(navbar.style,{backgroundColor:"#c62828", display:"flex", alignItems:"center", padding:"10px 20px", fontFamily:"'Segoe UI', Tahoma, Geneva, Verdana, sans-serif", marginTop:"120px"});
  const navWrapper = document.createElement("div");
  Object.assign(navWrapper.style,{display:"flex", justifyContent:"flex-start", flex:"1", marginLeft:"675px"});
  ["Home","About Us","Contact Us"].forEach(label=>{
    const btn = document.createElement("button");
    btn.innerHTML = label + ' <span>▼</span>';
    Object.assign(btn.style,{background:"transparent", color:"white", border:"none", padding:"10px 18px", marginRight:"10px", fontWeight:"600", fontSize:"14px", cursor:"pointer", position:"relative"});
    const arrow = btn.querySelector("span");
    Object.assign(arrow.style,{fontSize:"10px", position:"absolute", right:"6px", top:"50%", transform:"translateY(-50%)", pointerEvents:"none"});
    btn.addEventListener("mouseover",()=>{btn.style.backgroundColor="rgba(255,255,255,0.15)"; btn.style.borderRadius="3px"});
    btn.addEventListener("mouseout",()=>{btn.style.backgroundColor="transparent"});
    navWrapper.appendChild(btn);
  });
  navbar.appendChild(navWrapper);
  document.body.appendChild(navbar);

  // ===== Sidebar =====
  const sidebar = document.createElement("div");
  Object.assign(sidebar.style,{width:"350px", backgroundColor:"#1e1e1e", color:"#fff", height:"575px", position:"absolute", top:"175px", right:"1325px", borderRight:"1px solid #ddd", display:"flex", flexDirection:"column"});
  const menuTitle = document.createElement("div");
  Object.assign(menuTitle.style,{display:"flex", alignItems:"center", justifyContent:"space-between", fontWeight:"bold", backgroundColor:"#333", color:"#fff", padding:"15px", fontSize:"14px", borderBottom:"1px solid #444"});
  const hamburger = document.createElement("span"); hamburger.textContent="☰"; Object.assign(hamburger.style,{marginRight:"10px", cursor:"pointer"});
  const titleText = document.createElement("span"); titleText.textContent="Main Products Category";
  const arrow2 = document.createElement("span"); arrow2.textContent="▼"; Object.assign(arrow2.style,{fontSize:"10px", marginLeft:"10px"});
  menuTitle.append(hamburger, titleText, arrow2);
  sidebar.appendChild(menuTitle);
  const menuContainer = document.createElement("div");
  Object.assign(menuContainer.style,{height:"100%", overflowY:"auto", backgroundColor:"#1e1e1e"});
  const menuList = document.createElement("ul");
  Object.assign(menuList.style,{listStyle:"none", padding:"0", margin:"0"});
  const items=[
    "Measuring Instruments","Aerospace Tools","Carbide / HSS Cutting Tools","Inserts","Deep Hole Drilling",
    "Saw Blades","Fasteners","Whitemetal and Ball Bearings","Tungsten Carbide","Square and Round HSS Tool Bits","CNC Machine Tools",
    "Extra Tool 1","Extra Tool 2","Extra Tool 3","Extra Tool 4","Extra Tool 5","Extra Tool 6","Extra Tool 7"
  ];
  items.forEach(text=>{
    const li=document.createElement("li"); li.textContent=text;
    Object.assign(li.style,{padding:"12px 20px", boxSizing:"border-box", borderBottom:"1px solid #333", color:"white", cursor:"pointer", transition:"background 0.3s", backgroundColor:"#1e1e1e"});
    li.addEventListener("mouseenter",()=>li.style.backgroundColor="#444");
    li.addEventListener("mouseleave",()=>li.style.backgroundColor="#1e1e1e");
    menuList.appendChild(li);
  });
  menuContainer.appendChild(menuList);
  sidebar.appendChild(menuContainer);
  document.body.appendChild(sidebar);

  // ===== Slider =====
  const sliderContainer = document.createElement("div");
  Object.assign(sliderContainer.style,{position:"absolute", top:"235px", left:"685px", display:"flex", justifyContent:"center", alignItems:"center"});
  document.body.appendChild(sliderContainer);
  const slider = document.createElement("div");
  Object.assign(slider.style,{position:"relative", width:"1000px", maxWidth:"90vw", height:"513px", borderRadius:"10px", overflow:"hidden", boxShadow:"0px 4px 12px rgba(0,0,0,0.2)"});
  sliderContainer.appendChild(slider);
  const slides = document.createElement("div");
  Object.assign(slides.style,{display:"flex", width:"300%", height:"100%", transition:"transform 0.6s ease-in-out"});
  slider.appendChild(slides);
  const slideData=[
    {img:"https://via.placeholder.com/850x420/ff0000/ffffff?text=Image+1", btnText:"Shop Now"},
    {img:"https://via.placeholder.com/850x420/00ff00/ffffff?text=Image+2", btnText:"Shop Now"},
    {img:"https://via.placeholder.com/850x420/0000ff/ffffff?text=Image+3", btnText:"Shop Now"}
  ];
  slideData.forEach((data,i)=>{
    const slide=document.createElement("div"); Object.assign(slide.style,{width:"100%", flexShrink:"0", position:"relative"});
    const img=document.createElement("img"); img.src=data.img; img.alt="Slide "+(i+1);
    Object.assign(img.style,{width:"100%", height:"100%", objectFit:"cover", display:"block"});
    const btn=document.createElement("button"); btn.textContent=data.btnText;
    Object.assign(btn.style,{position:"absolute", bottom:"20px", left:"20px", padding:"12px 25px", backgroundColor:"red", color:"white", border:"none", borderRadius:"5px", cursor:"pointer", fontWeight:"bold", fontSize:"16px", zIndex:"2"});
    btn.addEventListener("mouseover",()=>btn.style.backgroundColor="#b30000");
    btn.addEventListener("mouseout",()=>btn.style.backgroundColor="red");
    slide.append(img, btn); slides.appendChild(slide);
  });
  const dotsContainer=document.createElement("div");
  Object.assign(dotsContainer.style,{position:"absolute", bottom:"15px", left:"50%", transform:"translateX(-50%)", display:"flex", gap:"8px", zIndex:"3"});
  slider.appendChild(dotsContainer);
  const dots=[];
  slideData.forEach((_,i)=>{
    const dot=document.createElement("div");
    Object.assign(dot.style,{width:"12px", height:"12px", borderRadius:"50%", background:i===0?"red":"#bbb", cursor:"pointer", transition:"background 0.3s"});
    dot.addEventListener("click",()=>showSlide(i));
    dotsContainer.appendChild(dot); dots.push(dot);
  });
  let index=0;
  function showSlide(i){
    index=i;
    slides.style.transform=`translateX(-${index*100}%)`;
    dots.forEach((dot,idx)=>dot.style.background=idx===index?"red":"#bbb");
  }

  // ===== Features Banner =====
  const banner=document.createElement("div");
  Object.assign(banner.style,{
    display:"flex",justifyContent:"space-between",background:"#fff",border:"1px solid #ddd",borderRadius:"6px",overflow:"hidden",
    width:"1457px",height:"90px",position:"absolute",top:"800px",right:"222px",boxShadow:"0 4px 8px rgba(0,0,0,0.1)"
  });
  const featureData=[
    {icon:"https://img.icons8.com/ios-filled/50/fa314a/delivery.png", title:"Fair Price Shipping", desc:"Orders Now"},
    {icon:"https://img.icons8.com/ios-filled/50/fa314a/phone.png", title:"Support 24/7", desc:"Call us Anytime"},
    {icon:"https://img.icons8.com/ios-filled/50/fa314a/lock.png", title:"100% Safety", desc:"Only Secure Payments"},
    {icon:"https://img.icons8.com/ios-filled/50/fa314a/price-tag.png", title:"Hot Offers", desc:"Economy Prices"}
  ];
  featureData.forEach((feature,index)=>{
    const box=document.createElement("div");
    Object.assign(box.style,{flex:"1",display:"flex",alignItems:"center",justifyContent:"center",padding:"10px 20px",borderRight:index!==featureData.length-1?"1px solid #eee":"none"});
    const icon=document.createElement("img"); icon.src=feature.icon; Object.assign(icon.style,{width:"40px", height:"40px", marginRight:"15px"});
    const textDiv=document.createElement("div");
    const title=document.createElement("h4"); title.innerText=feature.title; Object.assign(title.style,{fontSize:"16px", color:"#333", marginBottom:"5px"});
    const desc=document.createElement("p"); desc.innerText=feature.desc; Object.assign(desc.style,{fontSize:"14px", color:"#666", margin:"0"});
    textDiv.append(title, desc);
    box.append(icon, textDiv);
    banner.appendChild(box);
  });
  document.body.appendChild(banner);

  // ===== Featured Category Cards =====
  const sectionTopSpacing = 750;
  const sectionWidth = "1500px";
  const gapBetweenLineAndCards = 80;
  const cardHeight = 300;
  const itemsPerPage = 4;
  const mainWrapper = document.createElement("div");
  Object.assign(mainWrapper.style,{margin: "0 auto", marginTop: sectionTopSpacing + "px", maxWidth: sectionWidth});
  const categorySection = document.createElement("div");
  Object.assign(categorySection.style,{display: "flex",alignItems: "center",gap: "15px",padding: "0 20px"});
  const categoryTitle = document.createElement("div");
  categoryTitle.innerText = "Featured Category";
  Object.assign(categoryTitle.style,{fontWeight: "bold",fontSize: "16px"});
  const divider = document.createElement("div");
  Object.assign(divider.style,{flexGrow: "1",height: "1px",backgroundColor: "#ddd"});
  const categoryButtons = document.createElement("div");
  Object.assign(categoryButtons.style,{display: "flex",alignItems: "center",gap: "12px"});
  ["All", "Measuring Instruments", "Inserts", "Deep Hole Drilling"].forEach((cat,index)=>{
    const btn=document.createElement("button"); btn.innerText=cat;
    Object.assign(btn.style,{border:"none",background:"none",fontSize:"14px",cursor:"pointer",padding:"6px 14px",borderRadius:"20px",transition:"all 0.3s"});
    if(index===0){btn.classList.add("active");btn.style.border="1px solid red";btn.style.color="red";btn.style.fontWeight="bold";}
    btn.addEventListener("click",()=>{
      categoryButtons.querySelectorAll("button").forEach(b=>{b.classList.remove("active");b.style.border="none";b.style.color="black";b.style.fontWeight="normal";});
      btn.classList.add("active");btn.style.border="1px solid red";btn.style.color="red";btn.style.fontWeight="bold";
    });
    categoryButtons.appendChild(btn);
  });
  const navButtons=document.createElement("div");
  Object.assign(navButtons.style,{display:"flex",gap:"6px"});
  const prevBtn=document.createElement("button"); prevBtn.innerHTML="&lt;"; Object.assign(prevBtn.style,{border:"none",backgroundColor:"#f5f5f5",padding:"6px 10px",cursor:"pointer",borderRadius:"4px"});
  const nextBtn=document.createElement("button"); nextBtn.innerHTML="&gt;"; Object.assign(nextBtn.style,{border:"none",backgroundColor:"#f5f5f5",padding:"6px 10px",cursor:"pointer",borderRadius:"4px"});
  navButtons.append(prevBtn,nextBtn);
  categorySection.append(categoryTitle,divider,categoryButtons,navButtons);
  mainWrapper.appendChild(categorySection);
  const cardsWrapper=document.createElement("div");
  Object.assign(cardsWrapper.style,{overflow:"hidden",marginTop:`${gapBetweenLineAndCards}px`,padding:"0 20px"});
  const cardsContainer=document.createElement("div");
  cardsContainer.id="cardsContainer"; Object.assign(cardsContainer.style,{display:"flex",gap:"15px",transition:"transform 0.5s ease"});
  for(let i=1;i<=15;i++){
    const card=document.createElement("div");
    Object.assign(card.style,{flex:"0 0 calc(25% - 15px)",border:"1px solid #eee",borderRadius:"6px",overflow:"hidden",textAlign:"center",background:"#fff",boxShadow:"0 2px 6px rgba(0,0,0,0.05)",transition:"transform 0.2s"});
    card.addEventListener("mouseover",()=>card.style.transform="translateY(-4px)");
    card.addEventListener("mouseout",()=>card.style.transform="translateY(0)");
    const img=document.createElement("img"); img.src=`https://via.placeholder.com/400x225?text=Item+${i}`; img.alt=`Item ${i}`;
    Object.assign(img.style,{width:"100%",objectFit:"cover",display:"block",height:cardHeight+"px"});
    const title=document.createElement("h4"); title.innerText=`Item ${i}`; Object.assign(title.style,{margin:"8px 0",fontSize:"13px",color:"#333"});
    const shopBtn=document.createElement("a"); shopBtn.innerText="Shop Now"; shopBtn.href="#";
    Object.assign(shopBtn.style,{display:"inline-block",margin:"5px 0 12px",padding:"5px 12px",background:"red",color:"#fff",fontSize:"12px",fontWeight:"bold",borderRadius:"20px",cursor:"pointer",textDecoration:"none",transition:"background 0.3s"});
    shopBtn.addEventListener("mouseover",()=>shopBtn.style.background="darkred"); shopBtn.addEventListener("mouseout",()=>shopBtn.style.background="red");
    card.append(img,title,shopBtn); cardsContainer.appendChild(card);
  }
  cardsWrapper.appendChild(cardsContainer); mainWrapper.appendChild(cardsWrapper); document.body.appendChild(mainWrapper);
  let currentIndex=0; const cardElement=cardsContainer.querySelector("div"); const cardWidthCalc=cardElement.offsetWidth+15;
  const totalCards=cardsContainer.querySelectorAll("div").length; const totalPages=Math.ceil(totalCards/itemsPerPage);
  function updateCarousel(){cardsContainer.style.transform=`translateX(-${currentIndex*cardWidthCalc*itemsPerPage}px)`;}
  prevBtn.addEventListener("click",()=>{currentIndex=(currentIndex-1+totalPages)%totalPages;updateCarousel();});
  nextBtn.addEventListener("click",()=>{currentIndex=(currentIndex+1)%totalPages;updateCarousel();});

  // ===== Bestseller Banner =====
  const cardTop = 1500;
  const cardLeft = 220;
  const cardWidth = 1470;
  const cardHeightBest = 350;
  const style = document.createElement("style");
  style.textContent = `
    .bestseller-card { position: absolute; top: ${cardTop}px; left: ${cardLeft}px; width: ${cardWidth}px; height: ${cardHeightBest}px; border: 1px solid #ddd; border-radius: 6px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); overflow: hidden; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease; text-decoration: none; }
    .bestseller-card:hover { transform: translateY(-5px); box-shadow: 0 5px 12px rgba(0,0,0,0.2); }
    .bestseller-card img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .bestseller-heading { position: absolute; top: ${cardTop + cardHeightBest + 100}px; left: 200px; width: ${cardWidth}px; display: flex; align-items: center; gap: 15px; margin: 0 auto; max-width: 1500px; padding: 0 20px; }
    .bestseller-heading div:first-child { font-weight: bold; font-size: 16px; }
    .bestseller-heading div:last-child { flex-grow: 1; height: 1px; background-color: #ddd; }
  `;
  document.head.appendChild(style);
  const bestsellerCard = document.createElement("a");
  bestsellerCard.href = "#";
  bestsellerCard.className = "bestseller-card";
  const bestsellerImg = document.createElement("img");
  bestsellerImg.src = "https://via.placeholder.com/1470x250?text=Bestseller+Banner";
  bestsellerImg.alt = "Bestseller Banner";
  bestsellerCard.appendChild(bestsellerImg);
  document.body.appendChild(bestsellerCard);
  const bestsellerHeading=document.createElement("div");
  bestsellerHeading.className = "bestseller-heading";
  const headingText=document.createElement("div"); headingText.innerText="Bestseller";
  const headingDivider=document.createElement("div");
  bestsellerHeading.append(headingText,headingDivider);
  document.body.appendChild(bestsellerHeading);

  // ===== Cards Section Below =====
  const cardsData = [
    {img:"https://via.placeholder.com/300x60?text=Image+1", text:"Whitemetal And Ball Bearings", top:2060, left:216, width:350, height:600},
    {img:"https://via.placeholder.com/300x60", text:"Tungsten Carbide", top:2040, left:590, width:350, height:300},
    {img:"https://via.placeholder.com/300x60", text:"Square and Round HSS Tool Bits", top:2040, left:970, width:350, height:300},
    {img:"https://via.placeholder.com/300x60", text:"CNC Machine Tools", top:2040, left:1350, width:350, height:300},
    {img:"https://via.placeholder.com/300x60", text:"Abrasives Technologies", top:2370, left:590, width:350, height:300},
    {img:"https://via.placeholder.com/300x60", text:"Diamond CBN Grinding Wheels", top:2370, left:970, width:350, height:300},
    {img:"https://via.placeholder.com/300x60", text:"Brazed Tools", top:2370, left:1350, width:350, height:300},
  ];
  cardsData.forEach(data => {
    const card = document.createElement("a");
    card.href = "#";
    card.style.position = "absolute";
    card.style.top = data.top + "px";
    card.style.left = data.left + "px";
    card.style.width = data.width + "px";
    card.style.height = data.height + "px";
    card.style.backgroundColor = "#fff";
    card.style.border = "1px solid #ddd";
    card.style.borderRadius = "6px";
    card.style.overflow = "hidden";
    card.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)";
    card.style.cursor = "pointer";
    card.style.display = "flex";
    card.style.flexDirection = "column";
    card.style.transition = "transform 0.3s ease, box-shadow 0.3s ease";
    card.addEventListener("mouseover", ()=> { card.style.transform = "scale(1.03)"; card.style.boxShadow = "0 6px 12px rgba(0,0,0,0.2)"; });
    card.addEventListener("mouseout", ()=> { card.style.transform = "scale(1)"; card.style.boxShadow = "0 2px 5px rgba(0,0,0,0.1)"; });
    const img = document.createElement("img");
    img.src = data.img;
    img.alt = "";
    img.style.width = "100%";
    img.style.height = "60px";
    img.style.objectFit = "cover";
    card.appendChild(img);
    const cardContent = document.createElement("div");
    cardContent.style.padding = "10px";
    cardContent.style.marginTop = "auto";
    const p = document.createElement("p");
    p.innerText = data.text;
    p.style.marginBottom = "12px";
    p.style.fontSize = "14px";
    p.style.color = "#333";
    const btn = document.createElement("button");
    btn.innerText = "Shop Now";
    btn.style.backgroundColor = "#d32f2f";
    btn.style.color = "#fff";
    btn.style.border = "none";
    btn.style.padding = "8px 14px";
    btn.style.borderRadius = "3px";
    btn.style.cursor = "pointer";
    btn.style.fontWeight = "bold";
    btn.style.transition = "background-color 0.3s ease";
    btn.addEventListener("mouseover", ()=> btn.style.backgroundColor = "#b71c1c");
    btn.addEventListener("mouseout", ()=> btn.style.backgroundColor = "#d32f2f");
    cardContent.appendChild(p);
    cardContent.appendChild(btn);
    card.appendChild(cardContent);
    document.body.appendChild(card);
  });

  // ===== Footer =====
  const footerWrapper = document.createElement('div');
  footerWrapper.className = 'footer-wrapper';
  footerWrapper.style.position = 'absolute';
  footerWrapper.style.top = '2700px'; 
  footerWrapper.style.width = '100%';
  document.body.appendChild(footerWrapper);

  const footer = document.createElement('footer');
  footer.className = 'footer';
  footer.style.background = '#fff';
  footer.style.padding = '40px 60px';
  footer.style.borderTop = '1px solid #eee';
  footer.style.display = 'flex';
  footer.style.justifyContent = 'space-between';
  footer.style.flexWrap = 'wrap';
  footerWrapper.appendChild(footer);

  const col1 = document.createElement('div');
  col1.style.flex = '1';
  col1.style.minWidth = '250px';
  col1.style.margin = '10px';
  footer.appendChild(col1);
  const h3_1 = document.createElement('h3'); h3_1.innerText = 'Contact Us';
  h3_1.style.fontSize = '16px'; h3_1.style.fontWeight = 'bold'; h3_1.style.marginBottom = '15px'; h3_1.style.color = '#333';
  col1.appendChild(h3_1);
  const p1 = document.createElement('p'); p1.innerText = 'Alpha Standard Trading LLC, is one of the leading industrial Supplier in Middle East.';
  p1.style.fontSize = '14px'; p1.style.lineHeight = '22px'; p1.style.margin = '5px 0'; p1.style.color = '#444';
  col1.appendChild(p1);
  const contactInfoFooter = document.createElement('div'); contactInfoFooter.style.fontSize = '14px'; contactInfoFooter.style.marginTop = '10px';
  col1.appendChild(contactInfoFooter);
  const infoLines = [
    '🌍 Silver Home Building, M Floor, Office #M3-126, Hor Al Anz East, Abu Hail, Dubai, United Arab Emirates',
    '📧 info@alphastandard-uae.com',
    '📱 Mob: +971 543770321'
  ];
  infoLines.forEach(text => { const p = document.createElement('p'); p.innerText = text; p.style.display='flex'; p.style.alignItems='center'; contactInfoFooter.appendChild(p); });

  const col2 = document.createElement('div'); col2.style.flex = '1'; col2.style.minWidth = '250px'; col2.style.margin = '10px'; footer.appendChild(col2);
  const h3_2 = document.createElement('h3'); h3_2.innerText = 'Information'; h3_2.style.fontSize='16px'; h3_2.style.fontWeight='bold'; h3_2.style.marginBottom='15px'; h3_2.style.color='#333'; col2.appendChild(h3_2);
  const links = ['About Us','Delivery Information','Privacy Policy','Contact Us'];
  links.forEach(text => { const a = document.createElement('a'); a.href='#'; a.innerText=text; a.style.color='#333'; a.style.textDecoration='none'; a.style.fontSize='14px'; a.style.display='block'; a.style.margin='6px 0'; a.addEventListener('mouseover',()=>a.style.color='#e74c3c'); a.addEventListener('mouseout',()=>a.style.color='#333'); col2.appendChild(a); });

  const col3 = document.createElement('div'); col3.style.flex='1'; col3.style.minWidth='250px'; col3.style.margin='10px'; footer.appendChild(col3);
  const h3_3 = document.createElement('h3'); h3_3.innerText='Mission'; h3_3.style.fontSize='16px'; h3_3.style.fontWeight='bold'; h3_3.style.marginBottom='15px'; h3_3.style.color='#333'; col3.appendChild(h3_3);
  const p3 = document.createElement('p'); p3.innerText='Your ultimate destination for high-quality industrial products in the UAE and throughout the Middle East.'; p3.style.fontSize='14px'; p3.style.lineHeight='22px'; p3.style.margin='5px 0'; p3.style.color='#444'; col3.appendChild(p3);
  const subscribeBox = document.createElement('div'); subscribeBox.style.display='flex'; subscribeBox.style.margin='10px 0'; col3.appendChild(subscribeBox);
  const inputSub = document.createElement('input'); inputSub.type='email'; inputSub.placeholder='Email Address...'; inputSub.style.padding='8px'; inputSub.style.border='1px solid #ccc'; inputSub.style.borderRight='none'; inputSub.style.outline='none'; inputSub.style.width='200px'; inputSub.style.borderRadius='3px 0 0 3px'; subscribeBox.appendChild(inputSub);
  const btnSub=document.createElement('button'); btnSub.innerText='Subscribe'; btnSub.style.padding='8px 15px'; btnSub.style.border='none'; btnSub.style.background='#e74c3c'; btnSub.style.color='#fff'; btnSub.style.fontSize='14px'; btnSub.style.cursor='pointer'; btnSub.style.borderRadius='0 3px 3px 0'; subscribeBox.appendChild(btnSub);
  const followP=document.createElement('p'); followP.innerText='Follow us on social networks'; col3.appendChild(followP);
  const socialDiv=document.createElement('div'); socialDiv.style.marginTop='10px'; col3.appendChild(socialDiv);
  const socialLinks = ['https://cdn-icons-png.flaticon.com/512/174/174857.png','https://cdn-icons-png.flaticon.com/512/733/733585.png'];
  socialLinks.forEach((src,index)=>{const a=document.createElement('a'); a.href='#'; if(index===1)a.style.marginLeft='15px'; const img=document.createElement('img'); img.src=src; img.style.width='30px'; img.style.height='30px'; img.style.borderRadius='50%'; a.appendChild(img); socialDiv.appendChild(a);});

  const footerBottom=document.createElement('div'); footerBottom.style.textAlign='center'; footerBottom.style.padding='15px'; footerBottom.style.fontSize='13px'; footerBottom.style.borderTop='1px solid #eee'; footerBottom.style.color='#555'; footerWrapper.appendChild(footerBottom);
  const textBottom=document.createTextNode('Powered by Js — Design by '); footerBottom.appendChild(textBottom);
  const designerLink=document.createElement('a'); designerLink.href='#'; designerLink.innerText='M.Hassan.Ali'; designerLink.style.color='#e74c3c'; designerLink.style.textDecoration='none'; footerBottom.appendChild(designerLink);
</script>

</body>
</html>
