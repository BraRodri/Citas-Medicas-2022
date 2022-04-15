const showNextSection = (sectionNext) => {
    for (let index = 0; index < 6; index++) {
        let sectionNumber = index + 1;
        if(sectionNumber === sectionNext){
            document.getElementById(`tabSection${sectionNumber}`).className = 'active';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'block';
        }else if(sectionNumber < sectionNext){
            document.getElementById(`tabSection${sectionNumber}`).className = 'completed';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'none';
        }else{
            document.getElementById(`tabSection${sectionNumber}`).className = 'todo';
            document.getElementById(`divOfSection${sectionNumber}`).style.display = 'none';
        }
    }
}
