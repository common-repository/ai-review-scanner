window.addEventListener("load",function(){toggleVisibility(),setTimeout(function(){var e=document.getElementById("notification-bar-success"),t=document.getElementById("notification-bar-error");e&&(e.style.display="none"),t&&(t.style.display="none")},3e3)}),window.toggleVisibility=()=>{var e=document.getElementById("ars_enable_auto_approve"),t=document.getElementById("rating_threshold_section"),n=document.getElementById("apply_rule_section");e.checked?(t.style.display="",n.style.display=""):(t.style.display="none",n.style.display="none")},window.updateOutput=e=>{document.getElementById("rating_value").textContent=e,document.getElementById("rating_threshold").value=e};