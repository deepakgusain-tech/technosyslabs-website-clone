@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/Career.aspx"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform" enctype="multipart/form-data">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUKMTkwOTc4MjU1Nw9kFgJmD2QWFgIBDxYEHglpbm5lcmh0bWwFFmluZm9AdGVjaG5vc3lzbGFicy5jb20eBGhyZWYFHW1haWx0bzppbmZvQHRlY2hub3N5c2xhYnMuY29tZAICDxYCHwAFGkd1cnVncmFtLCBIYXJ5YW5hIC0gMTIyMDAyZAIDDxYEHwAFDis5MSA5MjIwNDM3NjgyHwEFEHRlbDo5MTkyMjA0Mzc2ODJkAgQPFgIfAAXGIjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0xJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xJz5UZWNobm9sb2d5IENvbnN1bHRpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Mic+U3RyYXRlZ2ljIE91dHNvdXJjaW5nPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NCc+Q2xvdWQgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTUnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTUnPkN5YmVyIFNlY3VyaXR5PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTYnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS03Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz03Jz5NYW5hZ2VkIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTgnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTgnPkVudGVycHJpc2UgQXBwbGljYXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTAnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEwJz5UZXN0aW5nIGFzIGEgU2VydmljZSAoVGFhUyk8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMSc+TWljcm9zb2Z0IER5bmFtaWNzIDM2NTwvYT48L2xpPjwvdWw+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTInPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPHNwYW4gY2xhc3M9J21lZ2EtaW5kaWNhdG9yJz48L3NwYW4+PC9hPjx1bCBjbGFzcz0nbWVnYS1zdWItbWVudSc+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTMnPkNyb3NzLVBsYXRmb3JtIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE0Jz5GbHV0dGVyIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE1Jz5SZWFjdCBOYXRpdmUgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTYnPlVJL1VYIERlc2lnbiBmb3IgTW9iaWxlIEFwcHM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNyc+QXBwIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjwvdWw+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLWhhcy1jaGlsZHJlbiBtZWdhLW1lbnUtZmx5b3V0JyBpZD0nbWVnYS1tZW51LWl0ZW0tMTgnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBQ8WAh8ABbQHPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTEnPkJhbmtpbmcgYW5kIEZpbmFuY2U8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9Mic+TWVkaWNhbC9QaGFybWE8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD00Jz5SUEEgSW1wbGVtZW50YXRpb248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9NSc+UmVwb3J0aW5nICZDb21wbGlhbmNlPC9hPjwvbGk+ZAIGDxYCHwAFhR08bGkgaWQ9J21lbnUtaXRlbS0xJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xJz5UZWNobm9sb2d5IENvbnN1bHRpbmc8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0yJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0zJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0zJz5EaWdpdGFsIFRyYW5zZm9ybWF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NCc+Q2xvdWQgU29sdXRpb25zPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS02JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz02Jz5EYXRhIENlbnRlciBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS03JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz03Jz5NYW5hZ2VkIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTknIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTknPkRhdGFiYXNlIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTAnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMSc+TWljcm9zb2Z0IER5bmFtaWNzIDM2NTwvYT48L2xpPjwvdWw+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMic+TW9iaWxlICBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTE4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTE4Jz5XZWIgRGV2ZWxvcG1lbnQgU2VydmljZXM8L2E+PHVsIGNsYXNzPSdzdWItbWVudSc+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTknPkN1c3RvbSBXZWJzaXRlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjAnPlJlc3BvbnNpdmUgV2Vic2l0ZSBEZXNpZ248L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMSc+RS1Db21tZXJjZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIyJz5XZWIgQXBwbGljYXRpb24gRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMyc+QVBJIEludGVncmF0aW9uIFNlcnZpY2VzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjQnPldlYnNpdGUgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjUnPlNFTy1GcmllbmRseSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI2Jz5CaWxsaW5nIGFuZCBSZXZlbnVlIE1hbmFnZW1lbnQgUG9ydGFsPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjcnPkh1bWFuIFJlc291cmNlIE1hbmFnZW1lbnQgU3lzdGVtIChIUk1TKTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI4Jz5Bc3NldCBNYW5hZ2VtZW50IFN5c3RlbTwvYT48L2xpPjwvdWw+PC9saT5kAgcPFgIfAAWUBjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Mic+TWVkaWNhbC9QaGFybWE8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00ODkyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ4OTInPjxhIGhyZWY9J1Byb2plY3QuYXNweD9wPTMnPkNsYWltIE1hbmFnZW1lbnQ8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00ODkyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ4OTInPjxhIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NSc+UmVwb3J0aW5nICZDb21wbGlhbmNlPC9hPjwvbGk+ZAIIDxYCHgdlbmN0eXBlBRNtdWx0aXBhcnQvZm9ybS1kYXRhZAIJDxYCHgRUZXh0BdMFPGFkZHJlc3MgY2xhc3M9J2NvbnRhY3QtaW5mbyBvZmZzZXQtdG9wLTUwJz48cD48cCBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgbWFyZ2luOiAwcHg7IGZvbnQtZmFtaWx5OiBNdWxpLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE2cHg7Ij48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij5BbHRGIEdsb2JhbCBCdXNpbmVzcyBQYXJrLCBNUjEsIDd0aCBGbG9vciwgVG93ZXIgRCwgTWVocmF1bGksIEd1cnVncmFtLCBIYXJ5YW5hLTEyMjAwMjwvc3Bhbj48L3A+DQo8cCBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgbWFyZ2luOiAwcHg7IGZvbnQtZmFtaWx5OiBNdWxpLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE2cHg7Ij4mbmJzcDs8L3A+DQo8cCBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgbWFyZ2luOiAwcHg7IGZvbnQtZmFtaWx5OiBNdWxpLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE2cHg7Ij48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij5VSyBPZmZpY2UgQWRkcmVzczombmJzcDsmbmJzcDs8L3NwYW4+PHNwYW4gc3R5bGU9ImJveC1zaXppbmc6IGJvcmRlci1ib3g7IGZvbnQtc2l6ZTogbWVkaXVtOyI+NTE3IFRoZSBCbGVuaGVpbSBDZW50ZXIgUHJpbmNlIFJlZ2VudCBSb2FkLCBUVzMgMU5EIFVLPC9zcGFuPjwvcD48L3A+ZAIKDxYCHwMFNzxkbD48ZHQ+PC9kdD4gPGRkPmluZm9AdGVjaG5vc3lzbGFicy5jb208L2RkPjwvZGw+PC9kbD5kAgsPFgIfAwU/PGRsIGNsYXNzPSdvZmZzZXQtdG9wLTAnPjxkdD4gPC9kdD48ZGQ+KzkxIDkyMjA0Mzc2ODI8L2RkPjwvZGw+ZGTwxGEC+/uYOXsJlQcpBsRBOb1BRQ==" />
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

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2415B15E" />
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAA2PaMpCxbUpwmN7CIT6TE85D7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2eITAC/yfRjqZIixmnZPRfi83ldVuunTLxEA1C2gXlzJBLv8KoN7GaMClYYxzre6gqHUwz8fBxcsrog1VUKPoXJO2bmv5gJ3Yil4cRlnnaZjm9XqcgDtcRwmG9RK+F39o9093G3ncpUEza/beFTIKIVvEqQFs=" />
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

        <div class="breadcumb-area" id="career-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brpt  ccase">
                            <h2>Career</h2>
                        </div>
                        <div class="breadcumb-inner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="2784" class="elementor elementor-2784">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2f7d60f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2f7d60f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-76ddeb0"
                                data-id="76ddeb0" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-eef009a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="eef009a" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8872380"
                                data-id="8872380" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c435f04 elementor-widget elementor-widget-sectiontitle"
                                        data-id="c435f04" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_left">

                                                    <h5></h5>


                                                    <h3>Most Trusted IT Solution</h3>


                                                    <h2>Just a few <span>Clicks</span> Away</h2>
                                                    <div class="bar-main">
                                                        <div class="bar bar-big"></div>
                                                    </div>


                                                    <p>We’re committed to hiring diverse talent and making sure that
                                                        you receive both respect and cooperation throughout the
                                                        interview process and after you start working with us. </p>



                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-39636c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="39636c6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4ea75dc"
                                                data-id="4ea75dc" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3f7b319 elementor-widget elementor-widget-iconbox"
                                                        data-id="3f7b319" data-element_type="widget"
                                                        data-widget_type="iconbox.default">
                                                        <div class="elementor-widget-container">


                                                            <div class="icon-box">
                                                                <div class="row">
                                                                    <div class="icon-box-icon">

                                                                        <div class="img-icon">
                                                                            <img decoding="async"
                                                                                style="height:150px;width:150px;"
                                                                                src="wp-content/uploads/2020/10/techno2.jpg"
                                                                                alt=""
                                                                                data-lazy-src="wp-content/uploads/2020/10/techno2.jpg" /><noscript><img
                                                                                    decoding="async"
                                                                                    src="wp-content/uploads/2020/10/testi3.jpg"
                                                                                    alt="" /></noscript>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="icon-box-content">
                                                                    <div class="title">
                                                                        <br />
                                                                        <h2 style="font-size:30px">Mr. Jayant
                                                                            Srivastava</h2>
                                                                    </div>
                                                                    <div class="description">
                                                                        <p style="font-size:20px;">Chief Executive
                                                                            Officer</p>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8d0cd5e"
                                data-id="8d0cd5e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-67b6ab0 elementor-widget elementor-widget-image"
                                        data-id="67b6ab0" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img fetchpriority="high" decoding="async" width="560" height="460"
                                                src="wp-content/uploads/2020/12/about-new.png"
                                                class="attachment-large size-large wp-image-2187" alt=""
                                                data-lazy-srcset="wp-content/uploads/2020/12/about-new.png 560w, wp-content/uploads/2020/12/about-new-450x370.pg 450w, wp-content/uploads/2020/12/about-new-300x246.png 300w"
                                                data-lazy-sizes="(max-width: 560px) 100vw, 560px"
                                                data-lazy-src="wp-content/uploads/2020/12/about-new.png" /><noscript><img
                                                    fetchpriority="high" decoding="async" width="560" height="460"
                                                    src="wp-content/uploads/2020/12/about-new.png"
                                                    class="attachment-large size-large wp-image-2187" alt=""
                                                    srcset="wp-content/uploads/2020/12/about-new.png 560w, wp-content/uploads/2020/12/about-new-450x370.png 450w, wp-content/uploads/2020/12/about-new-300x246.png 300w"
                                                    sizes="(max-width: 560px) 100vw, 560px" /></noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e808c2d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e808c2d" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f084252"
                                data-id="f084252" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7a8b892 elementor-widget elementor-widget-service"
                                        data-id="7a8b892" data-element_type="widget" data-widget_type="service.default">
                                        <div class="elementor-widget-container">


                                            <div class="service-box service-style-four">

                                                <div class="service-box-icon">
                                                    <i class="flaticon flaticon-support"></i>
                                                </div>

                                                <div class="service-box-content">

                                                    <div class="service-box-title">
                                                        <h2>Sales Manager</h2>
                                                    </div>

                                                    <div class="service-box-desc">
                                                        <p> Responsible for selling Cyber Security Solutions for
                                                            Enterprise customers in Delhi NCR region. </p>
                                                    </div>


                                                </div><!-- .service-box-content -->
                                            </div><!-- .service-box .service-style-four -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-df378d7"
                                data-id="df378d7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d34027a elementor-widget elementor-widget-service"
                                        data-id="d34027a" data-element_type="widget" data-widget_type="service.default">
                                        <div class="elementor-widget-container">


                                            <div class="service-box service-style-four">

                                                <div class="service-box-icon">
                                                    <i class="flaticon flaticon-support-6"></i>
                                                </div>

                                                <div class="service-box-content">

                                                    <div class="service-box-title">
                                                        <h2>Inside Sales Executive</h2>
                                                    </div>

                                                    <div class="service-box-desc">
                                                        <p>Candidate should have experience in selling IT
                                                            solutions/Cyber Security Solutions products and
                                                            services.</p>
                                                    </div>


                                                </div><!-- .service-box-content -->
                                            </div><!-- .service-box .service-style-four -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8af5f5f"
                                data-id="8af5f5f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-000e168 elementor-widget elementor-widget-service"
                                        data-id="000e168" data-element_type="widget" data-widget_type="service.default">
                                        <div class="elementor-widget-container">


                                            <div class="service-box service-style-four">

                                                <div class="service-box-icon">
                                                    <i class="flaticon flaticon-team"></i>
                                                </div>

                                                <div class="service-box-content">

                                                    <div class="service-box-title">
                                                        <h2>Pre-Sales Consultant</h2>
                                                    </div>

                                                    <div class="service-box-desc">
                                                        <p>Partner with the sales team and engage with prospective
                                                            customers to introduce our products and services.</p>
                                                    </div>


                                                </div><!-- .service-box-content -->
                                            </div><!-- .service-box .service-style-four -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--code for career-->
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2f7d60f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2f7d60f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-76ddeb0"
                                data-id="76ddeb0" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-eef009a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="eef009a" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8872380"
                                data-id="8872380" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c435f04 elementor-widget elementor-widget-sectiontitle"
                                        data-id="c435f04" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_left">
                                                    <h3>Most Trusted IT Solution</h3><br />

                                                    <p>Pursuing a career in cybersecurity means joining a booming
                                                        industry where more than 1 million cybersecurity jobs will
                                                        be available by 2023, but the number of trained
                                                        cybersecurity professionals will be less. You could be that
                                                        chosen one to bridge the cybersecurity skill gap and fill
                                                        the shortage of cyber talent and become adept in identifying
                                                        an organization's vulnerabilities and analyzing the
                                                        information security risks. Come join us and stay at the
                                                        forefront of a fast-moving industry.</p>





                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8d0cd5e"
                                data-id="8d0cd5e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4db7305 elementor-widget elementor-widget-heading"
                                        data-id="4db7305" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Get In Touch
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9110a56 elementor-widget elementor-widget-shortcode"
                                        data-id="9110a56" data-element_type="widget"
                                        data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">
                                                <div class="wpcf7 no-js" id="wpcf7-f2356-p4737-o1" lang="en-US"
                                                    dir="ltr">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>

                                                    <div class="form-area">
                                                        <div class="form-inner">
                                                            <div class="form-controls row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="sub">
                                                                                <input
                                                                                    name="ctl00$ContentPlaceHolder1$txtname"
                                                                                    type="text"
                                                                                    id="ContentPlaceHolder1_txtname"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                    placeholder="Name" />
                                                                                <span id="ContentPlaceHolder1_vldname"
                                                                                    class="small"
                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                    Fill Name</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="sub2">
                                                                                <input
                                                                                    name="ctl00$ContentPlaceHolder1$txtemail"
                                                                                    type="text"
                                                                                    id="ContentPlaceHolder1_txtemail"
                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required form-control"
                                                                                    placeholder="Email" />
                                                                                <span id="ContentPlaceHolder1_vldemail"
                                                                                    class="small"
                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                    Fill Email</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="sub3">
                                                                                <input
                                                                                    name="ctl00$ContentPlaceHolder1$txtnumber"
                                                                                    type="text"
                                                                                    id="ContentPlaceHolder1_txtnumber"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                    placeholder="Number" />

                                                                                <span
                                                                                    id="ContentPlaceHolder1_RequiredFieldValidator3"
                                                                                    class="small"
                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                    Enter Number</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="sub4"> <input
                                                                                    name="ctl00$ContentPlaceHolder1$txtapply"
                                                                                    type="text"
                                                                                    id="ContentPlaceHolder1_txtapply"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                    placeholder="Applying For" />
                                                                                <span id="ContentPlaceHolder1_vld"
                                                                                    class="small"
                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                    Fill It</span></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="textarea-234">
                                                                                <input type="file"
                                                                                    name="ctl00$ContentPlaceHolder1$file"
                                                                                    id="ContentPlaceHolder1_file"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" />
                                                                                <span
                                                                                    id="ContentPlaceHolder1_RequiredFieldValidator1"
                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                    Choose File</span>
                                                                                <span id="ContentPlaceHolder1_vldfile"
                                                                                    class="small"
                                                                                    style="color:Red;visibility:hidden;">Only
                                                                                    .jpg,.png,.jpeg,.gif Files are
                                                                                    allowed</span>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-12">
                                                                    <div class="form-group">

                                                                        <input type="hidden"
                                                                            name="ctl00$ContentPlaceHolder1$RecaptchaToken"
                                                                            id="ContentPlaceHolder1_RecaptchaToken" />
                                                                    </div>
                                                                </div>





                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="buttons">
                                                                            <input type="submit"
                                                                                name="ctl00$ContentPlaceHolder1$buttonCareer"
                                                                                value="Submit"
                                                                                onclick="return executeCareerRecaptcha();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$buttonCareer&quot;, &quot;&quot;, true, &quot;Career&quot;, &quot;&quot;, false, false))"
                                                                                id="ContentPlaceHolder1_buttonCareer"
                                                                                class="button button-secondary"
                                                                                class="form-control" type="submit"
                                                                                style="background:#f37231" />
                                                                            <span id="ContentPlaceHolder1_ResultLabel"
                                                                                style="color:Red;"></span>
                                                                            <span
                                                                                id="ContentPlaceHolder1_lblErrorMessage"></span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>

                                                </div>
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
        <script src="../www.google.com/recaptcha/api.js" async defer></script>


    </div>

    <script type="text/javascript">
        //<![CDATA[
        var Page_Validators = new Array(document.getElementById("vldname"), document.getElementById(
                "RequiredFieldValidator3"), document.getElementById("vldemail"), document.getElementById("vldmsg"),
            document.getElementById("ContentPlaceHolder1_vldname"), document.getElementById(
                "ContentPlaceHolder1_vldemail"), document.getElementById("ContentPlaceHolder1_RequiredFieldValidator3"),
            document.getElementById("ContentPlaceHolder1_vld"), document.getElementById(
                "ContentPlaceHolder1_RequiredFieldValidator1"), document.getElementById("ContentPlaceHolder1_vldfile"));
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
        var ContentPlaceHolder1_vldname = document.all ? document.all["ContentPlaceHolder1_vldname"] : document
            .getElementById("ContentPlaceHolder1_vldname");
        ContentPlaceHolder1_vldname.controltovalidate = "ContentPlaceHolder1_txtname";
        ContentPlaceHolder1_vldname.errormessage = "Please Fill Name";
        ContentPlaceHolder1_vldname.validationGroup = "Career";
        ContentPlaceHolder1_vldname.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldname.initialvalue = "";
        var ContentPlaceHolder1_vldemail = document.all ? document.all["ContentPlaceHolder1_vldemail"] : document
            .getElementById("ContentPlaceHolder1_vldemail");
        ContentPlaceHolder1_vldemail.controltovalidate = "ContentPlaceHolder1_txtemail";
        ContentPlaceHolder1_vldemail.errormessage = "Please Fill Email";
        ContentPlaceHolder1_vldemail.validationGroup = "Career";
        ContentPlaceHolder1_vldemail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldemail.initialvalue = "";
        var ContentPlaceHolder1_RequiredFieldValidator3 = document.all ? document.all[
            "ContentPlaceHolder1_RequiredFieldValidator3"] : document.getElementById(
            "ContentPlaceHolder1_RequiredFieldValidator3");
        ContentPlaceHolder1_RequiredFieldValidator3.controltovalidate = "ContentPlaceHolder1_txtnumber";
        ContentPlaceHolder1_RequiredFieldValidator3.errormessage = "Please Enter Number";
        ContentPlaceHolder1_RequiredFieldValidator3.validationGroup = "Career";
        ContentPlaceHolder1_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_RequiredFieldValidator3.initialvalue = "";
        var ContentPlaceHolder1_vld = document.all ? document.all["ContentPlaceHolder1_vld"] : document.getElementById(
            "ContentPlaceHolder1_vld");
        ContentPlaceHolder1_vld.controltovalidate = "ContentPlaceHolder1_txtapply";
        ContentPlaceHolder1_vld.errormessage = "Please Fill It";
        ContentPlaceHolder1_vld.validationGroup = "Career";
        ContentPlaceHolder1_vld.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vld.initialvalue = "";
        var ContentPlaceHolder1_RequiredFieldValidator1 = document.all ? document.all[
            "ContentPlaceHolder1_RequiredFieldValidator1"] : document.getElementById(
            "ContentPlaceHolder1_RequiredFieldValidator1");
        ContentPlaceHolder1_RequiredFieldValidator1.controltovalidate = "ContentPlaceHolder1_file";
        ContentPlaceHolder1_RequiredFieldValidator1.errormessage = "Please Choose File";
        ContentPlaceHolder1_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_RequiredFieldValidator1.initialvalue = "";
        var ContentPlaceHolder1_vldfile = document.all ? document.all["ContentPlaceHolder1_vldfile"] : document
            .getElementById("ContentPlaceHolder1_vldfile");
        ContentPlaceHolder1_vldfile.controltovalidate = "ContentPlaceHolder1_file";
        ContentPlaceHolder1_vldfile.errormessage = "Only .jpg,.png,.jpeg,.gif Files are allowed";
        ContentPlaceHolder1_vldfile.validationGroup = "Career";
        ContentPlaceHolder1_vldfile.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldfile.validationexpression = "(.*?)\\.(jpg|JPG|pdf|PDF|jpeg|JPEG)$";
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

        document.getElementById('ContentPlaceHolder1_vldname').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vldname'));
        }

        document.getElementById('ContentPlaceHolder1_vldemail').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vldemail'));
        }
        Sys.Application.add_init(function() {
            $create(AjaxControlToolkit.FilteredTextBoxBehavior, {
                "FilterType": 2,
                "id": "ContentPlaceHolder1_FilteredTextBoxExtender4"
            }, null, null, $get("ContentPlaceHolder1_txtnumber"));
        });

        document.getElementById('ContentPlaceHolder1_RequiredFieldValidator3').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_RequiredFieldValidator3'));
        }

        document.getElementById('ContentPlaceHolder1_vld').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vld'));
        }

        document.getElementById('ContentPlaceHolder1_RequiredFieldValidator1').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_RequiredFieldValidator1'));
        }

        document.getElementById('ContentPlaceHolder1_vldfile').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vldfile'));
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
