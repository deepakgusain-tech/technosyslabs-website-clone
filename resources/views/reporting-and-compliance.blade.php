@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/Project.aspx?p=5"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUKMTc3MTA1MTQxNw9kFgJmD2QWFgIBDxYEHglpbm5lcmh0bWwFFmluZm9AdGVjaG5vc3lzbGFicy5jb20eBGhyZWYFHW1haWx0bzppbmZvQHRlY2hub3N5c2xhYnMuY29tZAICDxYCHwAFGkd1cnVncmFtLCBIYXJ5YW5hIC0gMTIyMDAyZAIDDxYEHwAFDis5MSA5MjIwNDM3NjgyHwEFEHRlbDo5MTkyMjA0Mzc2ODJkAgQPFgIfAAXGIjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0xJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xJz5UZWNobm9sb2d5IENvbnN1bHRpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Mic+U3RyYXRlZ2ljIE91dHNvdXJjaW5nPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NCc+Q2xvdWQgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTUnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTUnPkN5YmVyIFNlY3VyaXR5PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTYnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS03Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz03Jz5NYW5hZ2VkIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTgnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTgnPkVudGVycHJpc2UgQXBwbGljYXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTAnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEwJz5UZXN0aW5nIGFzIGEgU2VydmljZSAoVGFhUyk8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMSc+TWljcm9zb2Z0IER5bmFtaWNzIDM2NTwvYT48L2xpPjwvdWw+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTInPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPHNwYW4gY2xhc3M9J21lZ2EtaW5kaWNhdG9yJz48L3NwYW4+PC9hPjx1bCBjbGFzcz0nbWVnYS1zdWItbWVudSc+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTMnPkNyb3NzLVBsYXRmb3JtIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE0Jz5GbHV0dGVyIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE1Jz5SZWFjdCBOYXRpdmUgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTYnPlVJL1VYIERlc2lnbiBmb3IgTW9iaWxlIEFwcHM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNyc+QXBwIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjwvdWw+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTgnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBQ8WAh8ABbQHPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTEnPkJhbmtpbmcgYW5kIEZpbmFuY2U8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9Mic+TWVkaWNhbC9QaGFybWE8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD00Jz5SUEEgSW1wbGVtZW50YXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9NSc+UmVwb3J0aW5nICZDb21wbGlhbmNlPC9hPjwvbGk+ZAIGDxYCHwAFhR08bGkgaWQ9J21lbnUtaXRlbS0xJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xJz5UZWNobm9sb2d5IENvbnN1bHRpbmc8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0yJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0zJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0zJz5EaWdpdGFsIFRyYW5zZm9ybWF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NCc+Q2xvdWQgU29sdXRpb25zPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS02JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz02Jz5EYXRhIENlbnRlciBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS03JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz03Jz5NYW5hZ2VkIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTknIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTknPkRhdGFiYXNlIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTAnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMSc+TWljcm9zb2Z0IER5bmFtaWNzIDM2NTwvYT48L2xpPjwvdWw+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMic+TW9iaWxlICBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTE4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8L2E+PHVsIGNsYXNzPSdzdWItbWVudSc+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTknPkN1c3RvbSBXZWJzaXRlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjAnPlJlc3BvbnNpdmUgV2Vic2l0ZSBEZXNpZ248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMSc+RS1Db21tZXJjZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIyJz5XZWIgQXBwbGljYXRpb24gRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMyc+QVBJIEludGVncmF0aW9uIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjQnPldlYnNpdGUgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjUnPlNFTy1GcmllbmRseSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI2Jz5CaWxsaW5nIGFuZCBSZXZlbnVlIE1hbmFnZW1lbnQgUG9ydGFsPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjcnPkh1bWFuIFJlc291cmNlIE1hbmFnZW1lbnQgU3lzdGVtIChIUk1TKTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI4Jz5Bc3NldCBNYW5hZ2VtZW50IFN5c3RlbTwvYT48L2xpPjwvdWw+PC9saT5kAgcPFgIfAAWUBjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Mic+TWVkaWNhbC9QaGFybWE8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00ODkyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ4OTInPjxhIGhyZWY9J1Byb2plY3QuYXNweD9wPTMnPkNsYWltIE1hbmFnZW1lbnQ8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00ODkyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ4OTInPjxhIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NSc+UmVwb3J0aW5nICZDb21wbGlhbmNlPC9hPjwvbGk+ZAIID2QWAgIdD2QWCAIBDxYCHwAFIkEgQ2FzZSBTdHVkeSBpbiBSUEEgSW1wbGVtZW50YXRpb25kAgMPFgIfAAUdT3BlcmF0aW9uYWwgUXVhbGl0eSBBc3N1cmFuY2VkAgUPFgIfAAV8PGltZyBzcmM9VXBsb2FkL0Nhc2VTdHVkeS9wZW9wbGUtc2lnbmluZy1kb2N1bWVudHMtc2lkZS12aWV3XzIzLTIxNDk0NDU3NzA4MTllNjg0Ni1iNGZjLTQxMzgtYjQyMi03MGI4ZjkyNWU1ZGUuanBnIGFsdD0nJyAvPmQCBw8WAh8ABaoKPHA+PHN0cm9uZz5BYm91dCB0aGUgQ2xpZW50IDwvc3Ryb25nPjxiciAvPjxiciAvPg0KVGhlIGNsaWVudCB3YXMgb25lIG9mIHRoZSBzcGVjaWFsaXN0IHNlcnZpY2UgcHJvdmlkZXJzIGZvciB0aGUgQ2xhaW1zJyB1bml0IG9mIGEgbWFpbiBoZWFsdGggY2FyZSBvcmdhbml6YXRpb24gc2VydmluZyByb3VnaGx5IDcwIG1pbGxpb24gcGVvcGxlIGZyb20gb25lIHNpZGUgb2YgdGhlIGNvdW50cnkgdG8gdGhlIG90aGVyLjxiciAvPjxiciAvPg0KPHN0cm9uZz5UaGUgUHJvYmxlbTwvc3Ryb25nPjxiciAvPjxiciAvPg0KJmJ1bGw7IFRoZSBjb21wYW55IGZhY2VkIGNoYWxsZW5nZXMgaW4gbWVldGluZyBjbGllbnQgZGVtYW5kcyB3aXRoaW4gYWdyZWVkIHRpbWVsaW5lcyBhbmQgc3BlbnQgc2lnbmlmaWNhbnQgdGltZSBleHRyYWN0aW5nIHJlcG9ydHMgZnJvbSB3ZWIgYXBwbGljYXRpb25zLjxiciAvPjxiciAvPg0KJmJ1bGw7IFByaW9yIHRvIHJvYm90aXphdGlvbiwgdGhleSB3ZXJlIG1hbnVhbGx5IHByb2Nlc3NpbmcgZm9ydHkgcmVwb3J0cyBkYWlseSBmcm9tIGEgc3BlY2lmaWMgYXBwbGljYXRpb24sIHByb3ZpZGluZyBkZXRhaWxzIG9mIG9wZW4vY2xvc2VkIGNhc2VzIGNydWNpYWwgZm9yIGRhaWx5IHRhc2tzLjxiciAvPg0KJmJ1bGw7IFRoaXMgbWFudWFsIHByb2Nlc3Mgd2FzIHByb25lIHRvIGhpZ2ggbGV2ZWxzIG9mIGh1bWFuIGVycm9yLiA8YnIgLz48YnIgLz4NCjxzdHJvbmc+VGhlIFNvbHV0aW9uPC9zdHJvbmc+PGJyIC8+PGJyIC8+DQomYnVsbDsgV2l0aCBSb2JvdGljcyBQcm9jZXNzIEF1dG9tYXRpb24sIHRoZSBjb21wYW55IGNvdWxkIGF1dG9tYXRlIHRoZSBwcm9jZXNzIHByZXZpb3VzbHkgZG9uZSBtYW51YWxseS48YnIgLz4NCiZidWxsOyBUaGV5IGFzc2lnbmVkIGEgcm9ib3QgdG8gZG93bmxvYWQgcmVwb3J0cyBmcm9tIHRoZSBzcGVjaWZpYyBhcHBsaWNhdGlvbiBkYWlseSwgdXNpbmcgZWFzaWx5IGRlZmluZWQgcnVsZXMuIEFkZGl0aW9uYWxseSwgYW4gZW1haWwgbm90aWZpY2F0aW9uIHdhcyB0cmlnZ2VyZWQgdXBvbiBzdWNjZXNzZnVsIGNvbXBsZXRpb24uPGJyIC8+PGJyIC8+DQo8c3Ryb25nPlZhbHVlIEFkZGVkPC9zdHJvbmc+PGJyIC8+PGJyIC8+DQomYnVsbDsgQWNoaWV2ZWQgMTAwJSBGVEUgc2F2aW5nczxiciAvPg0KJmJ1bGw7IFJlZHVjZWQgY29zdHMgYnkgb3ZlciAkMS4wIG1pbGxpb24gYW5udWFsbHk8YnIgLz4NCiZidWxsOyBJbXByb3ZlZCBvcGVyYXRpb25hbCBxdWFsaXR5PGJyIC8+DQomYnVsbDsgQWNoaWV2ZWQgYSAxMDAlIGFjY3VyYWN5IHJhdGUgaW4gcHJvY2Vzc2luZzwvcD5kAgkPFgIeBFRleHQF0wU8YWRkcmVzcyBjbGFzcz0nY29udGFjdC1pbmZvIG9mZnNldC10b3AtNTAnPjxwPjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPkFsdEYgR2xvYmFsIEJ1c2luZXNzIFBhcmssIE1SMSwgN3RoIEZsb29yLCBUb3dlciBELCBNZWhyYXVsaSwgR3VydWdyYW0sIEhhcnlhbmEtMTIyMDAyPC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPlVLIE9mZmljZSBBZGRyZXNzOiZuYnNwOyZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij41MTcgVGhlIEJsZW5oZWltIENlbnRlciBQcmluY2UgUmVnZW50IFJvYWQsIFRXMyAxTkQgVUs8L3NwYW4+PC9wPjwvcD5kAgoPFgIfAgU3PGRsPjxkdD48L2R0PiA8ZGQ+aW5mb0B0ZWNobm9zeXNsYWJzLmNvbTwvZGQ+PC9kbD48L2RsPmQCCw8WAh8CBT88ZGwgY2xhc3M9J29mZnNldC10b3AtMCc+PGR0PiA8L2R0PjxkZD4rOTEgOTIyMDQzNzY4MjwvZGQ+PC9kbD5kZJm0G7RFr/0KOJeHwyDVRCd3iXos" />
                    </div>

                    <script type="text/javascript">
                        //<![CDATA[
                        var theForm = document.forms['Enquiryform'];
                        if (!theForm) {
                            theForm = document.Enquiryform;
                        }

                        function __doPostBack(eventTarget, eventArgument) {
                            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                                theForm.__EVENTTARGET.value = eventTarget;
                                theForm.__EVENTARGUMENT.value = eventArgument;
                                theForm.submit();
                            }
                        }
                        //]]>
                    </script>


                    <script
                        src="WebResource655d.js?d=e8b6j3uDc-gu5-oSf9AB_YWNiCOtGiVvYQsBNm0c25Ec08ibPPMrSPLFdWxyNe8UhO1_-WfUy-i-D3o9CvVYYIaHNF41&amp;t=638901734248157332"
                        type="text/javascript"></script>


                    <script
                        src="ScriptResource5b50.js?d=d4YLUkbWQHj3NAcEIMiXz15hiOxY0Y81_cW9a2G721WPfH_YG8cJzfBidSLKbgEJ08Fh8bu0Y8QYxb2T29pRH1PBjh704XIKOfj3zuYe8T9T0SEcGcJwIuO2bTU5H9-RxQ9DJQlfZaWb0pA1z2EDh767_UA1&amp;t=ffffffff93d1c106"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourcec355.js?d=wLx6-ElG3Yo8Yw4VWZOVUH6gEyXx2ufgGGdf_8_ZOE9XbufVGBaV8MG-t_8vqAlZn_C_fAR4QflHzZFdmvenFlssJ6Ed9-5-31TCHW6yxx0Znzi24Iv7-fI6d4J7_X7IgmS-zQA94r_xIVvcjJL6M1df8Q_movYNzVnQXTcFgSKAkeTT0&amp;t=5c0e0825"
                        type="text/javascript"></script>
                    <script type="text/javascript">
                        //<![CDATA[
                        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
                        //]]>
                    </script>

                    <script
                        src="ScriptResource0d21.js?d=pXjRZo5_ZcT-2ONRqlcMW7sqAhTeztySmGriAYOZaiC7mAn5JV0UmbJSqQdvSjT3Ic3jPKYEWr0NaLL4wiV_XX1BdQOmzStL6tG9gJp_fU_RwcITWK4041sB2JmvgfPevWEjvZxH904TbOv25YVJqzJFknFGF9M51o6gnT5_NgWTmQMx0&amp;t=5c0e0825"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourceea91.axd?d=fW00APDiGngTn7UKtg3EnPiEL_iMqQydP5IjLHF87hsCvEXtVMgHdQ0Etfx8F2vnbWnIE1zBRlPem2ugKzDTXr-S7mK7WMF81fMDSe5B3UaVKEVVllhLHdhkWkf1o6hoKlgPVAhweg_npqfNNLsFZyoevfI1&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResourcea4b7.axd?d=9uoiTCzTzgjcKqo5A9mfNKcc4a4a6B0xTi-VZFmGDV9wHNwe17ew1_pcJMq9-JFhnd7ZqB0kCKelnUKsnU6o72uMixTgOICi-i-C7KvHjbWCexYn2ZEexascWVaZE9x_v2HkKRCvJbN5s1_CMDTyeaz1q1E1&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script
                        src="ScriptResource979a.axd?d=oqHpJ9jY7a9pJHTD7kp36c1rkUWY_W-FnTH6dqAAd1re0HJdBqoVIcT9IR3cu6UZVpxWTVVumv9HNe_Ckr5tAqe9MAiKXTEcwKTJeodbqXYkrYFglbo8pgcRL0X88te9C3g7gNBMiv_aI4KbGRllwBIbDsa41Vo8hW96eTbwmPR6_DvQidL_xhegoKqdndMPYpme4Q2&amp;t=ffffffff9b7d03cf"
                        type="text/javascript"></script>
                    <script type="text/javascript">
                        //<![CDATA[
                        function WebForm_OnSubmit() {
                            if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                            return true;
                        }
                        //]]>
                    </script>

                    <div class="aspNetHidden">

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B1B628F7" />
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAAcqvw+M/HsbOyMVNa5pZOvND7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2e7BSoVjj6U24ed+WppsxqzCWFslU=" />
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', 'Enquiryform', [], [], [], 90, 'ctl00');
                        //]]>
                    </script>

                    <div>

                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="fname" class="control-label"></label>
                            <input name="ctl00$txtname" type="text" id="txtname" class="form-control"
                                placeholder="Name" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldname" class="small" style="color:White;visibility:hidden;">Please Fill Your
                                Name</span>

                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="mobile" class="control-label"></label>
                            <input name="ctl00$txtmobile" type="text" id="txtmobile" class="form-control" border="0"
                                placeholder="Number" style="border: none; border-bottom: 1px solid white; height: 32px" />

                            <span id="RequiredFieldValidator3" class="small" style="color:White;visibility:hidden;">Please
                                Enter Number</span>

                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="Email" class="control-label"></label>
                            <input name="ctl00$txtmail" type="email" id="txtmail" class="form-control"
                                placeholder="Email" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldemail" class="small" style="color:White;visibility:hidden;">Please Fill
                                Your Email</span>
                        </div>
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">
                            <label for="Message" class="control-label"></label>
                            <input name="ctl00$txtmsg" type="text" id="txtmsg" Border="0" class="form-control"
                                placeholder="Message" style="border: none; border-bottom: 1px solid white; height: 32px" />
                            <span id="vldmsg" class="small" style="color:White;visibility:hidden;">Please Fill Your
                                Message</span>
                        </div>
                        <!--captcha code-->
                        <div class="form-group margin-top-m" style="margin-bottom: 0.1rem">

                            <input type="hidden" name="ctl00$RecaptchaToken" id="RecaptchaToken" />
                        </div>
                        <!--captcha code end-->


                        <div class="form-group">

                            <input type="submit" name="ctl00$Button1" value="Send Message"
                                onclick="return runValidationAndCaptcha();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Button1&quot;, &quot;&quot;, true, &quot;Enquire&quot;, &quot;&quot;, false, false))"
                                id="Button1" class="button button-secondary" class="form-control" type="submit" />
                            <span id="ResultLabel" style="color:Red;"></span>
                            <span id="lblErrorMessage"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
            </div>

            <div class="toggle-bg"></div>
        </section>
    </div>
    <div>

        <div class="breadcumb-area" id="body-project">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brpt ccase">
                            <h2></h2>
                        </div>
                        <div class="breadcumb-inner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="2813" class="elementor elementor-2813">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-080fc70 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="080fc70" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1a24ec"
                                data-id="f1a24ec" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-203e35b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="203e35b" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a0156f"
                                data-id="1a0156f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-12fbb39 elementor-widget elementor-widget-sectiontitle"
                                        data-id="12fbb39" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_center">

                                                    <h5></h5>



                                                    <h2><span id="ContentPlaceHolder1_DivTitle">A Case Study in RPA
                                                            Implementation</span></h2>
                                                    <h4 id="ContentPlaceHolder1_DivSubTitle">Operational Quality
                                                        Assurance</h4>
                                                    <div class="bar-main">
                                                        <div class="bar bar-big"></div>
                                                    </div>




                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-994e4af elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="994e4af" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">

                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-656071a"
                                                data-id="656071a" data-element_type="column"
                                                style="width: 100%;text-align:justify">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-27d8b3c elementor-widget elementor-widget-text-editor"
                                                        data-id="27d8b3c" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="ContentPlaceHolder1_DivImage"
                                                                class="kc-elm kc-css-97285 kc_text_block"><img
                                                                    src=Upload/CaseStudy/people-signing-documents-side-view_23-2149445770819e6846-b4fc-4138-b422-70b8f925e5de.jpg
                                                                    alt='' /></div>

                                                            <div id="ContentPlaceHolder1_DivDescription"
                                                                class="kc-elm kc-css-97285 kc_text_block">
                                                                <p><strong>About the Client </strong><br /><br />
                                                                    The client was one of the specialist service
                                                                    providers for the Claims' unit of a main health
                                                                    care organization serving roughly 70 million
                                                                    people from one side of the country to the
                                                                    other.<br /><br />
                                                                    <strong>The Problem</strong><br /><br />
                                                                    &bull; The company faced challenges in meeting
                                                                    client demands within agreed timelines and spent
                                                                    significant time extracting reports from web
                                                                    applications.<br /><br />
                                                                    &bull; Prior to robotization, they were manually
                                                                    processing forty reports daily from a specific
                                                                    application, providing details of open/closed
                                                                    cases crucial for daily tasks.<br />
                                                                    &bull; This manual process was prone to high
                                                                    levels of human error. <br /><br />
                                                                    <strong>The Solution</strong><br /><br />
                                                                    &bull; With Robotics Process Automation, the
                                                                    company could automate the process previously
                                                                    done manually.<br />
                                                                    &bull; They assigned a robot to download reports
                                                                    from the specific application daily, using
                                                                    easily defined rules. Additionally, an email
                                                                    notification was triggered upon successful
                                                                    completion.<br /><br />
                                                                    <strong>Value Added</strong><br /><br />
                                                                    &bull; Achieved 100% FTE savings<br />
                                                                    &bull; Reduced costs by over $1.0 million
                                                                    annually<br />
                                                                    &bull; Improved operational quality<br />
                                                                    &bull; Achieved a 100% accuracy rate in
                                                                    processing
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-af1b0fe elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="af1b0fe" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-958bd01"
                                data-id="958bd01" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3efc4d3 elementor-widget elementor-widget-heading"
                                        data-id="3efc4d3" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Resource</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b3e0590 elementor-widget elementor-widget-heading"
                                        data-id="b3e0590" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Get A Copy Of
                                                Brochure On
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-91fa64c elementor-widget elementor-widget-heading"
                                        data-id="91fa64c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Brand New IT
                                                Tech.
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-af53840 elementor-widget elementor-widget-button"
                                        data-id="af53840" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-caa96a3"
                                data-id="caa96a3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-db53263 elementor-widget elementor-widget-image"
                                        data-id="db53263" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img fetchpriority="high" decoding="async" width="513" height="583"
                                                src="wp-content/uploads/2021/01/slider-cybersecurity-slide-01.png"
                                                class="attachment-large size-large wp-image-2857" alt=""
                                                data-lazy-srcset="wp-content/uploads/2021/01/slider-cybersecurity-slide-01.png 513w, wp-content/uploads/2021/01/slider-cybersecurity-slide-01-450x511.png 450w, wp-content/uploads/2021/01/slider-cybersecurity-slide-01-264x300.png 264w"
                                                data-lazy-sizes="(max-width: 513px) 100vw, 513px"
                                                data-lazy-src="wp-content/uploads/2021/01/slider-cybersecurity-slide-01.png" /><noscript><img
                                                    fetchpriority="high" decoding="async" width="513" height="583"
                                                    src="wp-content/uploads/2021/01/slider-cybersecurity-slide-01.png"
                                                    class="attachment-large size-large wp-image-2857" alt=""
                                                    srcset="wp-content/uploads/2021/01/slider-cybersecurity-slide-01.png 513w, wp-content/uploads/2021/01/slider-cybersecurity-slide-01-450x511.png 450w, wp-content/uploads/2021/01/slider-cybersecurity-slide-01-264x300.png 264w"
                                                    sizes="(max-width: 513px) 100vw, 513px" /></noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript">
        //<![CDATA[
        var Page_Validators = new Array(document.getElementById("vldname"), document.getElementById(
            "RequiredFieldValidator3"), document.getElementById("vldemail"), document.getElementById("vldmsg"));
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[
        var vldname = document.all ? document.all["vldname"] : document.getElementById("vldname");
        vldname.controltovalidate = "txtname";
        vldname.errormessage = "Please Fill Your Name";
        vldname.validationGroup = "Enquire";
        vldname.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldname.initialvalue = "";
        var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById(
            "RequiredFieldValidator3");
        RequiredFieldValidator3.controltovalidate = "txtmobile";
        RequiredFieldValidator3.errormessage = "Please Enter Number";
        RequiredFieldValidator3.validationGroup = "Enquire";
        RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        RequiredFieldValidator3.initialvalue = "";
        var vldemail = document.all ? document.all["vldemail"] : document.getElementById("vldemail");
        vldemail.controltovalidate = "txtmail";
        vldemail.errormessage = "Please Fill Your Email";
        vldemail.validationGroup = "Enquire";
        vldemail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldemail.initialvalue = "";
        var vldmsg = document.all ? document.all["vldmsg"] : document.getElementById("vldmsg");
        vldmsg.controltovalidate = "txtmsg";
        vldmsg.errormessage = "Please Fill Your Message";
        vldmsg.validationGroup = "Enquire";
        vldmsg.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        vldmsg.initialvalue = "";
        //]]>
    </script>


    <script type="text/javascript">
        //<![CDATA[

        var Page_ValidationActive = false;
        if (typeof(ValidatorOnLoad) == "function") {
            ValidatorOnLoad();
        }

        function ValidatorOnSubmit() {
            if (Page_ValidationActive) {
                return ValidatorCommonOnSubmit();
            } else {
                return true;
            }
        }

        document.getElementById('vldname').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldname'));
        }
        Sys.Application.add_init(function() {
            $create(AjaxControlToolkit.FilteredTextBoxBehavior, {
                "FilterType": 2,
                "id": "FilteredTextBoxExtender4"
            }, null, null, $get("txtmobile"));
        });

        document.getElementById('RequiredFieldValidator3').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
        }

        document.getElementById('vldemail').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldemail'));
        }

        document.getElementById('vldmsg').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('vldmsg'));
        }
        //]]>
    </script>
    </form>
    <script src="../www.google.com/recaptcha/api4c20.js?render=6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt"></script>

    <script>
        function runValidationAndCaptcha() {
            if (typeof(Page_ClientValidate) == 'function') {
                if (!Page_ClientValidate('Enquire')) {
                    return false; // cancel if validation fails
                }
            }

            grecaptcha.ready(function() {
                grecaptcha.execute('6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt', {
                    action: 'Enquire'
                }).then(function(token) {
                    document.getElementById('RecaptchaToken').value = token;

                    // Trigger actual ASP.NET PostBack for the button
                    __doPostBack('ctl00$Button1', '');
                });
            });

            return false; // wait for reCAPTCHA to finish before submit
        }
    </script>
@endsection
