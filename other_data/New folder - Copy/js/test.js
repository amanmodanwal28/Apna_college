// script.js
document.addEventListener("DOMContentLoaded", function () {
  const audioPlayer = document.getElementById('audioPlayer');
  const playlistItems = document.getElementById('playlistItems');
  const folderSelect = document.getElementById('folderSelect');


  console.log(folderSelect);
  let playlist = [];
  let currentTrackIndex = 0;

  function fetchAudioFiles(folder) {
    return fetch(`get_audio_files.php?folder=${folder}`)
      .then(response => response.json());
  }

 function buildPlaylist() {
  playlistItems.innerHTML = '';

  playlist.forEach((track, index) => {
    const listItem = document.createElement('li');
    listItem.classList.add('playlist-item');
    listItem.textContent = track;
    listItem.dataset.index = index;
    listItem.addEventListener('click', () => playAudio(index, folderSelect.value)); // Pass the selected folder
    playlistItems.appendChild(listItem);
  });
}

folderSelect.addEventListener('change', changeFolder);



function changeFolder() {
  const selectedFolder = folderSelect.value;
  fetchAudioFiles(selectedFolder)
    .then(data => {
      playlist = data;
      buildPlaylist();
    })
    .catch(error => console.error('Error fetching audio files:', error));
}

  // Fetch initial audio files based on the default folder
  changeFolder();

  // Rest of your code...




function playAudio(trackIndex, selectedFolder) {
  if (trackIndex >= 0 && trackIndex < playlist.length) {
    const audioFilePath = `content/music/${selectedFolder}/${playlist[trackIndex]}`;
    audioPlayer.src = audioFilePath;
    //console.log(audioFilePath)
    document.getElementById("songtitle").innerHTML = playlist[trackIndex];
    audioPlayer.play();
    currentTrackIndex = trackIndex;
    updateActivePlaylistItem();
  }
}
function playNext(selectedFolder) {
  currentTrackIndex = (currentTrackIndex + 1) % playlist.length;
  playAudio(currentTrackIndex, selectedFolder);
}





  function updateActivePlaylistItem() {
  const playlistItems = document.querySelectorAll('.playlist-item');

  playlistItems.forEach((item, index) => {
    if (index === currentTrackIndex) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}
  audioPlayer.addEventListener('ended', function () {
    playNext(folderSelect.value); // Pass the selected folder
  });
});


