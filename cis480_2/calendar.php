<!DOCTYPE html>
<html>
    <head>
        <title>Weekly Scheduler</title>
        <link rel="stylesheet" href="calendarstyle.css">
        <script src="calendarscript.js"></script>
    </head>
    <body onload="expandTables()">
        <div>
            <header>
                <h1 id="temp"><em><u>Scheduler</u></em></h1>
            </header>
            <div id="main">
                <table class = "container">
                    <tr>
                        <td class = "container">
                            <table id="hours"></table>
                        </td>
                        <td class = "container">
                            <table id="monday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="tuesday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="wednesday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="thursday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="friday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="saturday">
                            </table>
                        </td>
                        <td class = "container">
                            <table id="sunday">
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
<div id="coverDiv">
<div id="formDiv" style="">
    <form id="form" name="form" action="" method="get">
                        <p id = "errorText" class ="error"></p>
                        <p>
                            Appointment details:
                        </p>
                        <textarea id="details" name="details" rows="5" cols="2"></textarea>
                        <p>
                            <!-- Duration: -->
                            <input type="time" id="duration" hidden>
                        <p id = "durationerror" class ="error"></p>
                            Start time:
                            <input type="text" id="startTime" readonly>
                            End time:
                            <input type="time" id="endTime">
                            Select a colour for this appointment:
                            <input type="color" id="colour" value = 'red'>
                            <input type="button" name="submit" Value="Create" onclick="putDataIn(this.form)">
                            <input type="button" name="cancel" Value="Cancel" onclick="closeForm(this.form)">
                        </p>
                    </form>
                    <p id = "testOutput"></p>
                </div>
            </div>
            <div id="appointments">
            </div>   
                    <p id = "pageTest"></p>
            <nav>
                <p>
                    <a href="index.html">Home</a>
                </p>
                <p>
                    <a href="/contact">Contact</a>
                </p>
            </nav>
        </div>
    </body>
</html>
