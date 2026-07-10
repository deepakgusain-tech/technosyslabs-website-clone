@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/Services.aspx?s=4"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUJNzgyMDAxNzI3D2QWAmYPZBYWAgEPFgQeCWlubmVyaHRtbAUWaW5mb0B0ZWNobm9zeXNsYWJzLmNvbR4EaHJlZgUdbWFpbHRvOmluZm9AdGVjaG5vc3lzbGFicy5jb21kAgIPFgIfAAUaR3VydWdyYW0sIEhhcnlhbmEgLSAxMjIwMDJkAgMPFgQfAAUOKzkxIDkyMjA0Mzc2ODIfAQUQdGVsOjkxOTIyMDQzNzY4MmQCBA8WAh8ABcYiPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTEnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0yJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS00Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTcnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS05Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTInPk1vYmlsZSAgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE5Jz5DdXN0b20gV2Vic2l0ZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIwJz5SZXNwb25zaXZlIFdlYnNpdGUgRGVzaWduPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjEnPkUtQ29tbWVyY2UgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMic+V2ViIEFwcGxpY2F0aW9uIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjMnPkFQSSBJbnRlZ3JhdGlvbiBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI0Jz5XZWJzaXRlIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI1Jz5TRU8tRnJpZW5kbHkgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNic+QmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50IFBvcnRhbDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI3Jz5IdW1hbiBSZXNvdXJjZSBNYW5hZ2VtZW50IFN5c3RlbSAoSFJNUyk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yOCc+QXNzZXQgTWFuYWdlbWVudCBTeXN0ZW08L2E+PC9saT48L3VsPjwvbGk+ZAIFDxYCHwAFtAc8bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0zJz5DbGFpbSBNYW5hZ2VtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAgYPFgIfAAWFHTxsaSBpZD0nbWVudS1pdGVtLTEnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTInPlN0cmF0ZWdpYyBPdXRzb3VyY2luZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTMnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS01JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz01Jz5DeWJlciBTZWN1cml0eTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTYnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTcnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS04JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz04Jz5FbnRlcnByaXNlIEFwcGxpY2F0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTEyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEzJz5Dcm9zcy1QbGF0Zm9ybSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNCc+Rmx1dHRlciBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNSc+UmVhY3QgTmF0aXZlIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE2Jz5VSS9VWCBEZXNpZ24gZm9yIE1vYmlsZSBBcHBzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTcnPkFwcCBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48L3VsPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBw8WAh8ABZQGPGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0xJz5CYW5raW5nIGFuZCBGaW5hbmNlPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NCc+UlBBIEltcGxlbWVudGF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAggPZBYCAh0PZBYQAgEPFgIfAAUPQ2xvdWQgU29sdXRpb25zZAIDDxYCHwAFmQFBdCBUZWNobm9zeXMgTGFicywgd2UgdW5kZXJzdGFuZCB0aGF0IHRoZSBkaWdpdGFsIGxhbmRzY2FwZSBpcyByYXBpZGx5IGV2b2x2aW5nLCBhbmQgYnVzaW5lc3NlcyBuZWVkIGFnaWxlLCBzY2FsYWJsZSwgYW5kIHNlY3VyZSBzb2x1dGlvbnMgdG8gc3RheSBhaGVhZC5kAgUPFgIfAAX1DyA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xJz5UZWNobm9sb2d5IENvbnN1bHRpbmc8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Mic+U3RyYXRlZ2ljIE91dHNvdXJjaW5nPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIGN1cnJlbnQtbWVudS1pdGVtIHBhZ2VfaXRlbSBwYWdlLWl0ZW0tMjk0NyBjdXJyZW50X3BhZ2VfaXRlbSAgbWVudS1pdGVtLTQ0MzknPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00JyBhcmlhLWN1cnJlbnQ9J3BhZ2UnPkNsb3VkIFNvbHV0aW9uczwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz01Jz5DeWJlciBTZWN1cml0eTwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz02Jz5EYXRhIENlbnRlciBTb2x1dGlvbnM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nyc+TWFuYWdlZCBTZXJ2aWNlczwvYT48L2xpPiA8bGkgaWQ9J21lbnUtaXRlbS00NDM4JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLTQ0MzgnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz04Jz5FbnRlcnByaXNlIEFwcGxpY2F0aW9uPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTknPkRhdGFiYXNlIFNlcnZpY2VzPC9hPjwvbGk+IDxsaSBpZD0nbWVudS1pdGVtLTQ0MzgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDQzOCc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEwJz5UZXN0aW5nIGFzIGEgU2VydmljZSAoVGFhUyk8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTInPk1vYmlsZSAgRGV2ZWxvcG1lbnQgU2VydmljZXM8L2E+PC9saT4gPGxpIGlkPSdtZW51LWl0ZW0tNDQzOCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00NDM4Jz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48L2xpPmQCBw8WAh8ABegBPGltZyBmZXRjaHByaW9yaXR5PSdoaWdoJyBkZWNvZGluZz0nYXN5bmMnICAgaGVpZ2h0PSc1NTAnIHNyYz0nVXBsb2FkL1NlcnZpY2VzL0Nsb3VkU29sdXRpb241MDczNDAxNS0wNGQ3LTRjZDktYTRmZC1iY2M1YmQ0MTY3MGMuanBnJyBjbGFzcz0nYXR0YWNobWVudC1sYXJnZSBzaXplLWxhcmdlIHdwLWltYWdlLTc3MScgYWx0PScnICBzaXplcz0nKG1heC13aWR0aDoxMDAwcHgpIDUwdncsNTAwcHgnIC8+CWQCCQ8WAh8ABQ9DbG91ZCBTb2x1dGlvbnNkAgsPFgIfAAW/AzxwPkF0IFRlY2hub3N5cyBMYWJzLCB3ZSB1bmRlcnN0YW5kIHRoYXQgdGhlIGRpZ2l0YWwgbGFuZHNjYXBlIGlzIHJhcGlkbHkgZXZvbHZpbmcsIGFuZCBidXNpbmVzc2VzIG5lZWQgYWdpbGUsIHNjYWxhYmxlLCBhbmQgc2VjdXJlIHNvbHV0aW9ucyB0byBzdGF5IGFoZWFkLiBPdXIgY29tcHJlaGVuc2l2ZSBzdWl0ZSBvZiBDbG91ZCBTb2x1dGlvbnMgaXMgZGVzaWduZWQgdG8gZW1wb3dlciB5b3VyIG9yZ2FuaXphdGlvbiwgZW5oYW5jZSBvcGVyYXRpb25hbCBlZmZpY2llbmN5LCBhbmQgZHJpdmUgaW5ub3ZhdGlvbi4gQXMgYSBuZXcgYWdlIElUIGFuZCBTZWN1cml0eSBTZXJ2aWNlcyBjb21wYW55LCB3ZSB0YWtlIHByaWRlIGluIGRlbGl2ZXJpbmcgdGFpbG9yZWQgY2xvdWQgc2VydmljZXMgdGhhdCBjYXRlciB0byB0aGUgdW5pcXVlIG5lZWRzIG9mIHlvdXIgYnVzaW5lc3MuPC9wPmQCDQ8WAh8ABaY7PHNlY3Rpb24gY2xhc3M9J2VsZW1lbnRvci1zZWN0aW9uIGVsZW1lbnRvci1pbm5lci1zZWN0aW9uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTg5ZGRlNDUgZWxlbWVudG9yLXNlY3Rpb24tYm94ZWQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQgZWxlbWVudG9yLXNlY3Rpb24taGVpZ2h0LWRlZmF1bHQnIGRhdGEtaWQ9Jzg5ZGRlNDUnIGRhdGEtZWxlbWVudF90eXBlPSdzZWN0aW9uJz4gIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb250YWluZXIgZWxlbWVudG9yLWNvbHVtbi1nYXAtZGVmYXVsdCc+PGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbHVtbiBlbGVtZW50b3ItY29sLTMzIGVsZW1lbnRvci1pbm5lci1jb2x1bW4gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtMDc1ZDNlMycgZGF0YS1pZD0nMDc1ZDNlMycgZGF0YS1lbGVtZW50X3R5cGU9J2NvbHVtbicgc3R5bGUgPSdtYXJnaW46MCBhdXRvOyc+ICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC13cmFwIGVsZW1lbnRvci1lbGVtZW50LXBvcHVsYXRlZCc+ICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTYzM2MzMjkgZWxlbWVudG9yLXdpZGdldCBlbGVtZW50b3Itd2lkZ2V0LXNlcnZpY2UnIGRhdGEtaWQ9JzYzM2MzMjknIGRhdGEtZWxlbWVudF90eXBlPSd3aWRnZXQnIGRhdGEtd2lkZ2V0X3R5cGU9J3NlcnZpY2UuZGVmYXVsdCc+ICAgICAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LWNvbnRhaW5lcic+ICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3ggc2VydmljZS1zdHlsZS1uaW5lJz4JICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWNvbnRlbnQnPgkgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LXRpdGxlJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxoMj5DbG91ZCBBc3Nlc3NtZW50czwvaDI+CSAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1kZXNjJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPSd0ZXh0LWFsaWduOmp1c3RpZnknPkVtYmFyayBvbiB5b3VyIGNsb3VkIGpvdXJuZXkgd2l0aCBjb25maWRlbmNlIHRocm91Z2ggb3VyIHRob3JvdWdoIENsb3VkIEFzc2Vzc21lbnRzLiBPdXIgZXhwZXJ0cyBhbmFseXplIHlvdXIgY3VycmVudCBJVCBsYW5kc2NhcGUsIGlkZW50aWZ5IG9wcG9ydHVuaXRpZXMgZm9yIGltcHJvdmVtZW50LCBhbmQgZGV2ZWxvcCBhIHRhaWxvcmVkIHJvYWRtYXAgdG8gbWF4aW1pemUgdGhlIGJlbmVmaXRzIG9mIGNsb3VkIHRlY2hub2xvZ3kuIEdhaW4gaW5zaWdodHMgaW50byBwb3RlbnRpYWwgY29zdCBzYXZpbmdzLCBwZXJmb3JtYW5jZSBlbmhhbmNlbWVudHMsIGFuZCBzZWN1cml0eSBmb3J0aWZpY2F0aW9ucyB0byBtYWtlIGluZm9ybWVkIGRlY2lzaW9ucyBmb3IgeW91ciBvcmdhbml6YXRpb25zIGZ1dHVyZS48L3A+ICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3gtY29udGVudCAtLT4gICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveCAuc2VydmljZS1zdHlsZS1uaW5lIC0tPiAgICAgICAgICAgPC9kaXY+CSAgICA8L2Rpdj4JPC9kaXY+PC9kaXY+PGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbHVtbiBlbGVtZW50b3ItY29sLTMzIGVsZW1lbnRvci1pbm5lci1jb2x1bW4gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtMDc1ZDNlMycgZGF0YS1pZD0nMDc1ZDNlMycgZGF0YS1lbGVtZW50X3R5cGU9J2NvbHVtbicgc3R5bGUgPSdtYXJnaW46MCBhdXRvOyc+ICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC13cmFwIGVsZW1lbnRvci1lbGVtZW50LXBvcHVsYXRlZCc+ICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTYzM2MzMjkgZWxlbWVudG9yLXdpZGdldCBlbGVtZW50b3Itd2lkZ2V0LXNlcnZpY2UnIGRhdGEtaWQ9JzYzM2MzMjknIGRhdGEtZWxlbWVudF90eXBlPSd3aWRnZXQnIGRhdGEtd2lkZ2V0X3R5cGU9J3NlcnZpY2UuZGVmYXVsdCc+ICAgICAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LWNvbnRhaW5lcic+ICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3ggc2VydmljZS1zdHlsZS1uaW5lJz4JICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWNvbnRlbnQnPgkgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LXRpdGxlJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxoMj5DbG91ZCBNaWdyYXRpb25zPC9oMj4JICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWRlc2MnID4JICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9J3RleHQtYWxpZ246anVzdGlmeSc+U2VhbWxlc3NseSB0cmFuc2l0aW9uIHlvdXIgYXBwbGljYXRpb25zLCBkYXRhLCBhbmQgcHJvY2Vzc2VzIHRvIHRoZSBjbG91ZCB3aXRoIFRlY2hub3N5cyBMYWJzIENsb3VkIE1pZ3JhdGlvbiBzZXJ2aWNlcy4gT3VyIGV4cGVyaWVuY2VkIHRlYW0gZW5zdXJlcyBhIHNtb290aCBhbmQgZWZmaWNpZW50IG1pZ3JhdGlvbiwgbWluaW1pemluZyBkb3dudGltZSBhbmQgbWl0aWdhdGluZyByaXNrcy4gVW5sb2NrIHRoZSBzY2FsYWJpbGl0eSwgZmxleGliaWxpdHksIGFuZCBhZ2lsaXR5IHRoYXQgY2xvdWQgZW52aXJvbm1lbnRzIG9mZmVyLCBlbXBvd2VyaW5nIHlvdXIgYnVzaW5lc3MgdG8gYWRhcHQgYW5kIHRocml2ZSBpbiB0aGUgZGlnaXRhbCBlcmEuPC9wPiAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94LWNvbnRlbnQgLS0+ICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3ggLnNlcnZpY2Utc3R5bGUtbmluZSAtLT4gICAgICAgICAgIDwvZGl2PgkgICAgPC9kaXY+CTwvZGl2PjwvZGl2PjxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb2x1bW4gZWxlbWVudG9yLWNvbC0zMyBlbGVtZW50b3ItaW5uZXItY29sdW1uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTA3NWQzZTMnIGRhdGEtaWQ9JzA3NWQzZTMnIGRhdGEtZWxlbWVudF90eXBlPSdjb2x1bW4nIHN0eWxlID0nbWFyZ2luOjAgYXV0bzsnPiAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtd3JhcCBlbGVtZW50b3ItZWxlbWVudC1wb3B1bGF0ZWQnPiAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC02MzNjMzI5IGVsZW1lbnRvci13aWRnZXQgZWxlbWVudG9yLXdpZGdldC1zZXJ2aWNlJyBkYXRhLWlkPSc2MzNjMzI5JyBkYXRhLWVsZW1lbnRfdHlwZT0nd2lkZ2V0JyBkYXRhLXdpZGdldF90eXBlPSdzZXJ2aWNlLmRlZmF1bHQnPiAgICAgICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC1jb250YWluZXInPiAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94IHNlcnZpY2Utc3R5bGUtbmluZSc+CSAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1jb250ZW50Jz4JICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC10aXRsZScgPgkgICAgICAgICAgICAgICAgICAgICAgICA8aDI+Q2xvdWQgT3B0aW1pemF0aW9uPC9oMj4JICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94LWRlc2MnID4JICAgICAgICAgICAgICAgICAgICAgICAgPHAgc3R5bGU9J3RleHQtYWxpZ246anVzdGlmeSc+T3B0aW1pemUgeW91ciBjbG91ZCBpbmZyYXN0cnVjdHVyZSBmb3IgcGVhayBwZXJmb3JtYW5jZSBhbmQgY29zdCBlZmZpY2llbmN5IHdpdGggb3VyIENsb3VkIE9wdGltaXphdGlvbiBzZXJ2aWNlcy4gTGV2ZXJhZ2Ugb3VyIGV4cGVydGlzZSB0byBmaW5lLXR1bmUgeW91ciByZXNvdXJjZXMsIGVuaGFuY2Ugc2NhbGFiaWxpdHksIGFuZCBlbnN1cmUgdGhhdCB5b3Ugb25seSBwYXkgZm9yIHdoYXQgeW91IHVzZS4gU3RheSBhaGVhZCBvZiB0aGUgY29tcGV0aXRpb24gYnkgbWF4aW1pemluZyB0aGUgdmFsdWUgb2YgeW91ciBjbG91ZCBpbnZlc3RtZW50LjwvcD4gICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveC1jb250ZW50IC0tPiAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94IC5zZXJ2aWNlLXN0eWxlLW5pbmUgLS0+ICAgICAgICAgICA8L2Rpdj4JICAgIDwvZGl2Pgk8L2Rpdj48L2Rpdj4gIDwvZGl2Pjwvc2VjdGlvbj48c2VjdGlvbiBjbGFzcz0nZWxlbWVudG9yLXNlY3Rpb24gZWxlbWVudG9yLWlubmVyLXNlY3Rpb24gZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtODlkZGU0NSBlbGVtZW50b3Itc2VjdGlvbi1ib3hlZCBlbGVtZW50b3Itc2VjdGlvbi1oZWlnaHQtZGVmYXVsdCBlbGVtZW50b3Itc2VjdGlvbi1oZWlnaHQtZGVmYXVsdCcgZGF0YS1pZD0nODlkZGU0NScgZGF0YS1lbGVtZW50X3R5cGU9J3NlY3Rpb24nPiAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWNvbnRhaW5lciBlbGVtZW50b3ItY29sdW1uLWdhcC1kZWZhdWx0Jz48ZGl2IGNsYXNzPSdlbGVtZW50b3ItY29sdW1uIGVsZW1lbnRvci1jb2wtMzMgZWxlbWVudG9yLWlubmVyLWNvbHVtbiBlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC0wNzVkM2UzJyBkYXRhLWlkPScwNzVkM2UzJyBkYXRhLWVsZW1lbnRfdHlwZT0nY29sdW1uJyBzdHlsZSA9J21hcmdpbjowIGF1dG87Jz4gICA8ZGl2IGNsYXNzPSdlbGVtZW50b3Itd2lkZ2V0LXdyYXAgZWxlbWVudG9yLWVsZW1lbnQtcG9wdWxhdGVkJz4gICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLWVsZW1lbnQgZWxlbWVudG9yLWVsZW1lbnQtNjMzYzMyOSBlbGVtZW50b3Itd2lkZ2V0IGVsZW1lbnRvci13aWRnZXQtc2VydmljZScgZGF0YS1pZD0nNjMzYzMyOScgZGF0YS1lbGVtZW50X3R5cGU9J3dpZGdldCcgZGF0YS13aWRnZXRfdHlwZT0nc2VydmljZS5kZWZhdWx0Jz4gICAgICAgICAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtY29udGFpbmVyJz4gICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveCBzZXJ2aWNlLXN0eWxlLW5pbmUnPgkgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtY29udGVudCc+CSAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtdGl0bGUnID4JICAgICAgICAgICAgICAgICAgICAgICAgPGgyPkNvbnRhaW5lciBhbmQgU2VydmVybGVzcyBDb21wdXRpbmc8L2gyPgkgICAgICAgICAgICAgICAgICAgIDwvZGl2PiAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0nc2VydmljZS1ib3gtZGVzYycgPgkgICAgICAgICAgICAgICAgICAgICAgICA8cCBzdHlsZT0ndGV4dC1hbGlnbjpqdXN0aWZ5Jz5FeHBsb3JlIHRoZSBmdXR1cmUgb2YgYXBwbGljYXRpb24gZGVwbG95bWVudCB3aXRoIG91ciBDb250YWluZXIgYW5kIFNlcnZlcmxlc3MgQ29tcHV0aW5nIHNvbHV0aW9ucy4gQmVuZWZpdCBmcm9tIGluY3JlYXNlZCBhZ2lsaXR5LCByYXBpZCBzY2FsaW5nLCBhbmQgc2ltcGxpZmllZCBtYW5hZ2VtZW50IG9mIHlvdXIgYXBwbGljYXRpb25zLiBXaGV0aGVyIHlvdSBjaG9vc2UgY29udGFpbmVycyBmb3IgcG9ydGFiaWxpdHkgb3Igc2VydmVybGVzcyBmb3IgcmVzb3VyY2UgZWZmaWNpZW5jeSwgd2UgaGVscCB5b3UgZW1icmFjZSBtb2Rlcm4gYXJjaGl0ZWN0dXJlcyB0aGF0IGRyaXZlIGlubm92YXRpb24uPC9wPiAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgIDwvZGl2PjwhLS0gLnNlcnZpY2UtYm94LWNvbnRlbnQgLS0+ICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3ggLnNlcnZpY2Utc3R5bGUtbmluZSAtLT4gICAgICAgICAgIDwvZGl2PgkgICAgPC9kaXY+CTwvZGl2PjwvZGl2PjxkaXYgY2xhc3M9J2VsZW1lbnRvci1jb2x1bW4gZWxlbWVudG9yLWNvbC0zMyBlbGVtZW50b3ItaW5uZXItY29sdW1uIGVsZW1lbnRvci1lbGVtZW50IGVsZW1lbnRvci1lbGVtZW50LTA3NWQzZTMnIGRhdGEtaWQ9JzA3NWQzZTMnIGRhdGEtZWxlbWVudF90eXBlPSdjb2x1bW4nIHN0eWxlID0nbWFyZ2luOjAgYXV0bzsnPiAgIDxkaXYgY2xhc3M9J2VsZW1lbnRvci13aWRnZXQtd3JhcCBlbGVtZW50b3ItZWxlbWVudC1wb3B1bGF0ZWQnPiAgICAgICA8ZGl2IGNsYXNzPSdlbGVtZW50b3ItZWxlbWVudCBlbGVtZW50b3ItZWxlbWVudC02MzNjMzI5IGVsZW1lbnRvci13aWRnZXQgZWxlbWVudG9yLXdpZGdldC1zZXJ2aWNlJyBkYXRhLWlkPSc2MzNjMzI5JyBkYXRhLWVsZW1lbnRfdHlwZT0nd2lkZ2V0JyBkYXRhLXdpZGdldF90eXBlPSdzZXJ2aWNlLmRlZmF1bHQnPiAgICAgICAgICAgPGRpdiBjbGFzcz0nZWxlbWVudG9yLXdpZGdldC1jb250YWluZXInPiAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9J3NlcnZpY2UtYm94IHNlcnZpY2Utc3R5bGUtbmluZSc+CSAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1jb250ZW50Jz4JICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC10aXRsZScgPgkgICAgICAgICAgICAgICAgICAgICAgICA8aDI+QXBwbGljYXRpb24gTW9kZXJuaXphdGlvbjwvaDI+CSAgICAgICAgICAgICAgICAgICAgPC9kaXY+ICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSdzZXJ2aWNlLWJveC1kZXNjJyA+CSAgICAgICAgICAgICAgICAgICAgICAgIDxwIHN0eWxlPSd0ZXh0LWFsaWduOmp1c3RpZnknPlJldml0YWxpemUgeW91ciBsZWdhY3kgYXBwbGljYXRpb25zIGFuZCBlbWJyYWNlIG1vZGVybiB0ZWNobm9sb2dpZXMgd2l0aCBvdXIgQXBwbGljYXRpb24gTW9kZXJuaXphdGlvbiBzZXJ2aWNlcy4gVXBncmFkZSwgcmVmYWN0b3IsIG9yIHJlLWFyY2hpdGVjdCB5b3VyIGFwcGxpY2F0aW9ucyB0byBtZWV0IGN1cnJlbnQgYnVzaW5lc3MgZGVtYW5kcywgaW1wcm92ZSB1c2VyIGV4cGVyaWVuY2UsIGFuZCBlbnN1cmUgY29tcGF0aWJpbGl0eSB3aXRoIHRoZSBsYXRlc3QgY2xvdWQgcGxhdGZvcm1zLiBUcmFuc2Zvcm0geW91ciBzb2Z0d2FyZSBsYW5kc2NhcGUgdG8gc3RheSBjb21wZXRpdGl2ZSBpbiB0aGUgZHluYW1pYyBkaWdpdGFsIGxhbmRzY2FwZS48L3A+ICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4gICAgICAgICAgICAgICAgICAgPC9kaXY+PCEtLSAuc2VydmljZS1ib3gtY29udGVudCAtLT4gICAgICAgICAgICAgICA8L2Rpdj48IS0tIC5zZXJ2aWNlLWJveCAuc2VydmljZS1zdHlsZS1uaW5lIC0tPiAgICAgICAgICAgPC9kaXY+CSAgICA8L2Rpdj4JPC9kaXY+PC9kaXY+ICA8L2Rpdj48L3NlY3Rpb24+ZAIPDxYCHwAFQFdhbnQgdG8gbGVhcm4gbW9yZSBhYm91dCBob3cgd2UgaGVscCBjbGllbnRzIGluIENsb3VkIFNvbHV0aW9ucz9kAgkPFgIeBFRleHQF0wU8YWRkcmVzcyBjbGFzcz0nY29udGFjdC1pbmZvIG9mZnNldC10b3AtNTAnPjxwPjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPkFsdEYgR2xvYmFsIEJ1c2luZXNzIFBhcmssIE1SMSwgN3RoIEZsb29yLCBUb3dlciBELCBNZWhyYXVsaSwgR3VydWdyYW0sIEhhcnlhbmEtMTIyMDAyPC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPlVLIE9mZmljZSBBZGRyZXNzOiZuYnNwOyZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij41MTcgVGhlIEJsZW5oZWltIENlbnRlciBQcmluY2UgUmVnZW50IFJvYWQsIFRXMyAxTkQgVUs8L3NwYW4+PC9wPjwvcD5kAgoPFgIfAgU3PGRsPjxkdD48L2R0PiA8ZGQ+aW5mb0B0ZWNobm9zeXNsYWJzLmNvbTwvZGQ+PC9kbD48L2RsPmQCCw8WAh8CBT88ZGwgY2xhc3M9J29mZnNldC10b3AtMCc+PGR0PiA8L2R0PjxkZD4rOTEgOTIyMDQzNzY4MjwvZGQ+PC9kbD5kZHnvRjM0Zg58keXRb4j3P5BfwpPS" />
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

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="3C6209F6" />
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAAefxZqNBeawgrs4yXXgAnTdD7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2eLdIY/CTWYb0RLASV4oObKTCh4mA=" />
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

        <div class="breadcumb-area" id="service-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="brpt ccase">
                            <h2 id="ContentPlaceHolder1_divhead">Cloud Solutions</h2>
                        </div>
                        <div class="breadcumb-inner">
                            <p id="ContentPlaceHolder1_divpara">At Technosys Labs, we understand that the digital
                                landscape is rapidly evolving, and businesses need agile, scalable, and secure
                                solutions to stay ahead.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="2947" class="elementor elementor-2947">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-f663707 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="f663707" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26eca5a"
                                data-id="26eca5a" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a547048 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="a547048" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1f7e2cd"
                                data-id="1f7e2cd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-016489f menu-service-menu-container elementor-widget elementor-widget-wp-widget-nav_menu"
                                        data-id="016489f" data-element_type="widget"
                                        data-widget_type="wp-widget-nav_menu.default">
                                        <div class="elementor-widget-container">
                                            <div class="menu-service-menu-container">
                                                 @include('layouts.sidebar-services')
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d9bd08d service-button elementor-widget elementor-widget-button"
                                        data-id="d9bd08d" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">





                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-796ea77"
                                data-id="796ea77" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-cb48409 elementor-widget elementor-widget-image"
                                        data-id="cb48409" data-element_type="widget" data-widget_type="image.default">
                                        <div id="ContentPlaceHolder1_divImg" class="elementor-widget-container"><img
                                                fetchpriority='high' decoding='async' height='550'
                                                src='Upload/Services/CloudSolution50734015-04d7-4cd9-a4fd-bcc5bd41670c.jpg'
                                                class='attachment-large size-large wp-image-771' alt=''
                                                sizes='(max-width:1000px) 50vw,500px' /> </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-0c22889 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="0c22889" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ecc08a8"
                                                data-id="ecc08a8" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4f760ec elementor-widget elementor-widget-heading"
                                                        data-id="4f760ec" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 id="ContentPlaceHolder1_divhead2"
                                                                class="elementor-heading-title elementor-size-default">
                                                                Cloud Solutions</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b7e9f36 elementor-widget elementor-widget-text-editor"
                                                        data-id="b7e9f36" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container"
                                                            style="text-align:justify">
                                                            <div id="ContentPlaceHolder1_divContent"
                                                                class="kc-elm kc-css-486867 kc_text_block">
                                                                <p>At Technosys Labs, we understand that the digital
                                                                    landscape is rapidly evolving, and businesses
                                                                    need agile, scalable, and secure solutions to
                                                                    stay ahead. Our comprehensive suite of Cloud
                                                                    Solutions is designed to empower your
                                                                    organization, enhance operational efficiency,
                                                                    and drive innovation. As a new age IT and
                                                                    Security Services company, we take pride in
                                                                    delivering tailored cloud services that cater to
                                                                    the unique needs of your business.</p>
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
                </div>


                <!--code for sub-service-heading-->
                <div data-elementor-type="wp-page" data-elementor-id="2937" class="elementor elementor-2937">

                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-cd3e199 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="cd3e199" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                        style="padding:50px 0 50px 0;margin-top:-60px">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4297331"
                                data-id="4297331" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9e43bbb elementor-widget elementor-widget-sectiontitle"
                                        data-id="9e43bbb" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_center">

                                                    <h4 id="our">Our Offerings </h4>


                                                    <h3></h3>


                                                    <h2></span></h2>
                                                    <div class="bar-main">
                                                        <div class="bar bar-big"></div>
                                                    </div>




                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <div id="ContentPlaceHolder1_divSubHeads">
                                        <section
                                            class='elementor-section elementor-inner-section elementor-element elementor-element-89dde45 elementor-section-boxed elementor-section-height-default elementor-section-height-default'
                                            data-id='89dde45' data-element_type='section'>
                                            <div class='elementor-container elementor-column-gap-default'>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Cloud Assessments</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Embark on
                                                                                your cloud journey with confidence
                                                                                through our thorough Cloud
                                                                                Assessments. Our experts analyze
                                                                                your current IT landscape, identify
                                                                                opportunities for improvement, and
                                                                                develop a tailored roadmap to
                                                                                maximize the benefits of cloud
                                                                                technology. Gain insights into
                                                                                potential cost savings, performance
                                                                                enhancements, and security
                                                                                fortifications to make informed
                                                                                decisions for your organizations
                                                                                future.</p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Cloud Migrations</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Seamlessly
                                                                                transition your applications, data,
                                                                                and processes to the cloud with
                                                                                Technosys Labs Cloud Migration
                                                                                services. Our experienced team
                                                                                ensures a smooth and efficient
                                                                                migration, minimizing downtime and
                                                                                mitigating risks. Unlock the
                                                                                scalability, flexibility, and
                                                                                agility that cloud environments
                                                                                offer, empowering your business to
                                                                                adapt and thrive in the digital era.
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Cloud Optimization</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Optimize
                                                                                your cloud infrastructure for peak
                                                                                performance and cost efficiency with
                                                                                our Cloud Optimization services.
                                                                                Leverage our expertise to fine-tune
                                                                                your resources, enhance scalability,
                                                                                and ensure that you only pay for
                                                                                what you use. Stay ahead of the
                                                                                competition by maximizing the value
                                                                                of your cloud investment.</p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class='elementor-section elementor-inner-section elementor-element elementor-element-89dde45 elementor-section-boxed elementor-section-height-default elementor-section-height-default'
                                            data-id='89dde45' data-element_type='section'>
                                            <div class='elementor-container elementor-column-gap-default'>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Container and Serverless Computing
                                                                            </h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Explore
                                                                                the future of application deployment
                                                                                with our Container and Serverless
                                                                                Computing solutions. Benefit from
                                                                                increased agility, rapid scaling,
                                                                                and simplified management of your
                                                                                applications. Whether you choose
                                                                                containers for portability or
                                                                                serverless for resource efficiency,
                                                                                we help you embrace modern
                                                                                architectures that drive innovation.
                                                                            </p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-075d3e3'
                                                    data-id='075d3e3' data-element_type='column' style='margin:0 auto;'>
                                                    <div class='elementor-widget-wrap elementor-element-populated'>
                                                        <div class='elementor-element elementor-element-633c329 elementor-widget elementor-widget-service'
                                                            data-id='633c329' data-element_type='widget'
                                                            data-widget_type='service.default'>
                                                            <div class='elementor-widget-container'>
                                                                <div class='service-box service-style-nine'>
                                                                    <div class='service-box-content'>
                                                                        <div class='service-box-title'>
                                                                            <h2>Application Modernization</h2>
                                                                        </div>
                                                                        <div class='service-box-desc'>
                                                                            <p style='text-align:justify'>Revitalize
                                                                                your legacy applications and embrace
                                                                                modern technologies with our
                                                                                Application Modernization services.
                                                                                Upgrade, refactor, or re-architect
                                                                                your applications to meet current
                                                                                business demands, improve user
                                                                                experience, and ensure compatibility
                                                                                with the latest cloud platforms.
                                                                                Transform your software landscape to
                                                                                stay competitive in the dynamic
                                                                                digital landscape.</p>
                                                                        </div>
                                                                    </div><!-- .service-box-content -->
                                                                </div><!-- .service-box .service-style-nine -->
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
                    </section>

                </div>
                <!-- end code for sub-service-heading-->

                <div data-elementor-type="wp-page" data-elementor-id="7116" class="elementor elementor-7116">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-deed5ed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="deed5ed" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ad191f"
                                data-id="0ad191f" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-5148247 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5148247" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0736756"
                                data-id="0736756" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-b32ec1c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="b32ec1c" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cea8c2f"
                                                data-id="cea8c2f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-94f6295 elementor-widget elementor-widget-heading"
                                                        data-id="94f6295" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 id="ContentPlaceHolder1_divsomecontent"
                                                                class="elementor-heading-title elementor-size-default">
                                                                Want to learn more about how we help clients in
                                                                Cloud Solutions?</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-900b01d"
                                                data-id="900b01d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6b335f6 elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                        data-id="6b335f6" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                    href="ContactUs.html">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span class="elementor-button-text">Get
                                                                            Started</span>
                                                                    </span>
                                                                </a>
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
