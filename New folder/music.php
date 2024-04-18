<?php 
//include header
include 'headermusic.php';
include 'welcome1.php';
include 'add.php';
?>


<div class="left">
    <h1 style="font-family: Arial Helvetica;text-align:center; font-weight: bold;font-style: italic;font-size: 33px;">
        MUSIC</h1>
    <div class="audio-player">
        <div class="title">
            <marquee id="songtitle">&nbsp;&nbsp;&nbsp;&nbsp;</marquee><br>
        </div>
        <audio id="audioPlayer" controls controlsList="nodownload">
            Your browser does not support the audio element.
        </audio>

    </div>

</div>


<div class="right">
    <table>

        <tr>
            <td>
                <b>Choose Category:</b>
            </td>
            <td>
                <div class="playlist">
                    <select id="folderSelect" style="background-color: inherit;">
                        <option value="hindi">Hindi</option>
                        <option value="english">English</option>
                        <option value="regional1">Regional1</option>
                        <option value="regional2">Regional2</option>
                        <!-- Add more options for different folders -->
                    </select>
                </div>
            </td>
        </tr>

    </table>

    <ul id='song-list'>

        <ul id="playlistItems">
            <!-- Playlist items will be added here -->
        </ul>

    </ul>
</div>

<?php 
//include header
include 'footer.php';

?>


</body>

</html>