document.addEventListener('DOMContentLoaded',function(){
if(!window.SCN_DATA)return;

SCN_DATA.notes.forEach((n,i)=>{
let el=document.createElement('div');
el.className='scn-note';
el.style.left=(50+i*30)+'px';
el.style.top=(100+i*30)+'px';
el.style.background=n.color||'#fffa75';

el.innerHTML=`
<div class='scn-close'>x</div>
<div class='scn-title'>${n.title}</div>
<div>${n.content}</div>
`;

document.body.appendChild(el);

el.querySelector('.scn-close').onclick=()=>el.remove();

let drag=false,ox,oy;
el.onmousedown=(e)=>{drag=true;ox=e.clientX-el.offsetLeft;oy=e.clientY-el.offsetTop;}
document.onmousemove=(e)=>{if(!drag)return;
el.style.left=(e.clientX-ox)+'px';
el.style.top=(e.clientY-oy)+'px';
}
document.onmouseup=()=>drag=false;
});
});
