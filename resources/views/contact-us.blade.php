@extends('layouts.master')

@section('main')
    <div>

        <section class="toggle-form" style="top: 60px;">
            <div class="formwrap px-4">
                <div class="icon-close pos-a">
                    <img src="wp-content/images/cross.png" alt="Close Button" class="cross" />
                </div>
                <!-- <p class="text-white mt-4 h3">Try Solodev for Free!</p>-->

                <form method="post" action="https://www.technosyslabs.com/ContactUs.aspx"
                    onsubmit="javascript:return WebForm_OnSubmit();" id="Enquiryform">
                    <div class="aspNetHidden">
                        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                            value="/wEPDwUJMTU3MjUxMjQ0D2QWAmYPZBYWAgEPFgQeCWlubmVyaHRtbAUWaW5mb0B0ZWNobm9zeXNsYWJzLmNvbR4EaHJlZgUdbWFpbHRvOmluZm9AdGVjaG5vc3lzbGFicy5jb21kAgIPFgIfAAUaR3VydWdyYW0sIEhhcnlhbmEgLSAxMjIwMDJkAgMPFgQfAAUOKzkxIDkyMjA0Mzc2ODIfAQUQdGVsOjkxOTIyMDQzNzY4MmQCBA8WAh8ABcYiPGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTEnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS0yJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yJz5TdHJhdGVnaWMgT3V0c291cmNpbmc8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Myc+RGlnaXRhbCBUcmFuc2Zvcm1hdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS00Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9NSc+Q3liZXIgU2VjdXJpdHk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tNic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9Nic+RGF0YSBDZW50ZXIgU29sdXRpb25zPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZScgaWQ9J21lZ2EtbWVudS1pdGVtLTcnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlJyBpZD0nbWVnYS1tZW51LWl0ZW0tOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OCc+RW50ZXJwcmlzZSBBcHBsaWNhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UnIGlkPSdtZWdhLW1lbnUtaXRlbS05Jz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz05Jz5EYXRhYmFzZSBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTAnPlRlc3RpbmcgYXMgYSBTZXJ2aWNlIChUYWFTKTxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xMic+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTInPk1vYmlsZSAgRGV2ZWxvcG1lbnQgU2VydmljZXM8c3BhbiBjbGFzcz0nbWVnYS1pbmRpY2F0b3InPjwvc3Bhbj48L2E+PHVsIGNsYXNzPSdtZWdhLXN1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMyc+Q3Jvc3MtUGxhdGZvcm0gQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTQnPkZsdXR0ZXIgQXBwIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTUnPlJlYWN0IE5hdGl2ZSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNic+VUkvVVggRGVzaWduIGZvciBNb2JpbGUgQXBwczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE3Jz5BcHAgTWFpbnRlbmFuY2UgJiBTdXBwb3J0PC9hPjwvbGk+PC91bD48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0taGFzLWNoaWxkcmVuIG1lZ2EtbWVudS1mbHlvdXQnIGlkPSdtZWdhLW1lbnUtaXRlbS0xOCc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczxzcGFuIGNsYXNzPSdtZWdhLWluZGljYXRvcic+PC9zcGFuPjwvYT48dWwgY2xhc3M9J21lZ2Etc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE5Jz5DdXN0b20gV2Vic2l0ZSBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIwJz5SZXNwb25zaXZlIFdlYnNpdGUgRGVzaWduPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjEnPkUtQ29tbWVyY2UgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMic+V2ViIEFwcGxpY2F0aW9uIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjMnPkFQSSBJbnRlZ3JhdGlvbiBTZXJ2aWNlczwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI0Jz5XZWJzaXRlIE1haW50ZW5hbmNlICYgU3VwcG9ydDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI1Jz5TRU8tRnJpZW5kbHkgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNic+QmlsbGluZyBhbmQgUmV2ZW51ZSBNYW5hZ2VtZW50IFBvcnRhbDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTI3Jz5IdW1hbiBSZXNvdXJjZSBNYW5hZ2VtZW50IFN5c3RlbSAoSFJNUyk8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yOCc+QXNzZXQgTWFuYWdlbWVudCBTeXN0ZW08L2E+PC9saT48L3VsPjwvbGk+ZAIFDxYCHwAFtAc8bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtIG1lZ2EtbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lZ2EtbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lZ2EtbWVudS1pdGVtLTQ5MjInIGlkPSdMaTMnPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nUHJvamVjdC5hc3B4P3A9MSc+QmFua2luZyBhbmQgRmluYW5jZTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD0zJz5DbGFpbSBNYW5hZ2VtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSBtZWdhLW1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZWdhLW1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZWdhLW1lbnUtaXRlbS00OTIyJyBpZD0nTGkzJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1Byb2plY3QuYXNweD9wPTQnPlJQQSBJbXBsZW1lbnRhdGlvbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0gbWVnYS1tZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVnYS1tZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVnYS1tZW51LWl0ZW0tNDkyMicgaWQ9J0xpMyc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAgYPFgIfAAWFHTxsaSBpZD0nbWVudS1pdGVtLTEnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEnPlRlY2hub2xvZ3kgQ29uc3VsdGluZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTInPlN0cmF0ZWdpYyBPdXRzb3VyY2luZzwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTMnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTMnPkRpZ2l0YWwgVHJhbnNmb3JtYXRpb248L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS00JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz00Jz5DbG91ZCBTb2x1dGlvbnM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS01JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz01Jz5DeWJlciBTZWN1cml0eTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTYnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTYnPkRhdGEgQ2VudGVyIFNvbHV0aW9uczwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTcnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSc+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTcnPk1hbmFnZWQgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS04JyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UnPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz04Jz5FbnRlcnByaXNlIEFwcGxpY2F0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tOScgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9OSc+RGF0YWJhc2UgU2VydmljZXM8L2E+PC9saT48bGkgaWQ9J21lbnUtaXRlbS0xMCcgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS1oYXMtY2hpbGRyZW4nPjxhIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xMCc+VGVzdGluZyBhcyBhIFNlcnZpY2UgKFRhYVMpPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTExJz5NaWNyb3NvZnQgRHluYW1pY3MgMzY1PC9hPjwvbGk+PC91bD48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTEyJyBjbGFzcz0nbWVudS1pdGVtIG1lbnUtaXRlbS10eXBlLXBvc3RfdHlwZSBtZW51LWl0ZW0tb2JqZWN0LXBhZ2UgbWVudS1pdGVtLWhhcy1jaGlsZHJlbic+PGEgaHJlZj0nU2VydmljZXMuYXNweD9zPTEyJz5Nb2JpbGUgIERldmVsb3BtZW50IFNlcnZpY2VzPC9hPjx1bCBjbGFzcz0nc3ViLW1lbnUnPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTEzJz5Dcm9zcy1QbGF0Zm9ybSBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNCc+Rmx1dHRlciBBcHAgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xNSc+UmVhY3QgTmF0aXZlIEFwcCBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTE2Jz5VSS9VWCBEZXNpZ24gZm9yIE1vYmlsZSBBcHBzPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTcnPkFwcCBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48L3VsPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tMTgnIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0taGFzLWNoaWxkcmVuJz48YSBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MTgnPldlYiBEZXZlbG9wbWVudCBTZXJ2aWNlczwvYT48dWwgY2xhc3M9J3N1Yi1tZW51Jz48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0xOSc+Q3VzdG9tIFdlYnNpdGUgRGV2ZWxvcG1lbnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yMCc+UmVzcG9uc2l2ZSBXZWJzaXRlIERlc2lnbjwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIxJz5FLUNvbW1lcmNlIERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjInPldlYiBBcHBsaWNhdGlvbiBEZXZlbG9wbWVudDwvYT48L2xpPjxsaSBjbGFzcz0nbWVnYS1tZW51LWl0ZW0nPjxhIGNsYXNzPSdtZWdhLW1lbnUtbGluaycgaHJlZj0nU2VydmljZXMuYXNweD9zPTIzJz5BUEkgSW50ZWdyYXRpb24gU2VydmljZXM8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNCc+V2Vic2l0ZSBNYWludGVuYW5jZSAmIFN1cHBvcnQ8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNSc+U0VPLUZyaWVuZGx5IERldmVsb3BtZW50PC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjYnPkJpbGxpbmcgYW5kIFJldmVudWUgTWFuYWdlbWVudCBQb3J0YWw8L2E+PC9saT48bGkgY2xhc3M9J21lZ2EtbWVudS1pdGVtJz48YSBjbGFzcz0nbWVnYS1tZW51LWxpbmsnIGhyZWY9J1NlcnZpY2VzLmFzcHg/cz0yNyc+SHVtYW4gUmVzb3VyY2UgTWFuYWdlbWVudCBTeXN0ZW0gKEhSTVMpPC9hPjwvbGk+PGxpIGNsYXNzPSdtZWdhLW1lbnUtaXRlbSc+PGEgY2xhc3M9J21lZ2EtbWVudS1saW5rJyBocmVmPSdTZXJ2aWNlcy5hc3B4P3M9MjgnPkFzc2V0IE1hbmFnZW1lbnQgU3lzdGVtPC9hPjwvbGk+PC91bD48L2xpPmQCBw8WAh8ABZQGPGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0xJz5CYW5raW5nIGFuZCBGaW5hbmNlPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD0yJz5NZWRpY2FsL1BoYXJtYTwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9Myc+Q2xhaW0gTWFuYWdlbWVudDwvYT48L2xpPjxsaSBpZD0nbWVudS1pdGVtLTQ4OTInIGNsYXNzPSdtZW51LWl0ZW0gbWVudS1pdGVtLXR5cGUtcG9zdF90eXBlIG1lbnUtaXRlbS1vYmplY3QtcGFnZSBtZW51LWl0ZW0tNDg5Mic+PGEgaHJlZj0nUHJvamVjdC5hc3B4P3A9NCc+UlBBIEltcGxlbWVudGF0aW9uPC9hPjwvbGk+PGxpIGlkPSdtZW51LWl0ZW0tNDg5MicgY2xhc3M9J21lbnUtaXRlbSBtZW51LWl0ZW0tdHlwZS1wb3N0X3R5cGUgbWVudS1pdGVtLW9iamVjdC1wYWdlIG1lbnUtaXRlbS00ODkyJz48YSBocmVmPSdQcm9qZWN0LmFzcHg/cD01Jz5SZXBvcnRpbmcgJkNvbXBsaWFuY2U8L2E+PC9saT5kAggPZBYCAh0PZBYEAgEPFgIeBFRleHQFzgY8YWRkcmVzcyBjbGFzcz0nY29udGFjdC1pbmZvIG9mZnNldC10b3AtNTAnPjxwIGNsYXNzPSdoNCBzdHlsZT0nZm9udC1zdHlsZTpub3JtYWw7IGZvbnQtd2VpZ2h0LWJvbGQgdGV4dC1waWN0b24tYmx1ZSBsZXR0ZXItc3BhY2Utbm9uZSBvZmZzZXQtdG9wLW5vbmUnPk91ciBBZGRyZXNzPC9wPjxwPjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPkFsdEYgR2xvYmFsIEJ1c2luZXNzIFBhcmssIE1SMSwgN3RoIEZsb29yLCBUb3dlciBELCBNZWhyYXVsaSwgR3VydWdyYW0sIEhhcnlhbmEtMTIyMDAyPC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPlVLIE9mZmljZSBBZGRyZXNzOiZuYnNwOyZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij41MTcgVGhlIEJsZW5oZWltIENlbnRlciBQcmluY2UgUmVnZW50IFJvYWQsIFRXMyAxTkQgVUs8L3NwYW4+PC9wPjwvcD5kAgMPFgIfAgWkATxkbD48ZHQ+PC9kdD4gPGRkPmluZm9AdGVjaG5vc3lzbGFicy5jb208L2RkPjwvZGw+PGRsIGNsYXNzPSdvZmZzZXQtdG9wLTAnPjxkdD48L2R0PjxkaXYgc3R5bGU9J2Rpc3BsYXk6IGlubGluZS1ibG9jazsgbWFyZ2luLXJpZ2h0OiA1cHg7Jz4rOTEgOTIyMDQzNzY4MjwvZGl2PjwvZGw+ZAIJDxYCHwIF0wU8YWRkcmVzcyBjbGFzcz0nY29udGFjdC1pbmZvIG9mZnNldC10b3AtNTAnPjxwPjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPkFsdEYgR2xvYmFsIEJ1c2luZXNzIFBhcmssIE1SMSwgN3RoIEZsb29yLCBUb3dlciBELCBNZWhyYXVsaSwgR3VydWdyYW0sIEhhcnlhbmEtMTIyMDAyPC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBtYXJnaW46IDBweDsgZm9udC1mYW1pbHk6IE11bGksIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTZweDsiPjxzcGFuIHN0eWxlPSJib3gtc2l6aW5nOiBib3JkZXItYm94OyBmb250LXNpemU6IG1lZGl1bTsiPlVLIE9mZmljZSBBZGRyZXNzOiZuYnNwOyZuYnNwOzwvc3Bhbj48c3BhbiBzdHlsZT0iYm94LXNpemluZzogYm9yZGVyLWJveDsgZm9udC1zaXplOiBtZWRpdW07Ij41MTcgVGhlIEJsZW5oZWltIENlbnRlciBQcmluY2UgUmVnZW50IFJvYWQsIFRXMyAxTkQgVUs8L3NwYW4+PC9wPjwvcD5kAgoPFgIfAgU3PGRsPjxkdD48L2R0PiA8ZGQ+aW5mb0B0ZWNobm9zeXNsYWJzLmNvbTwvZGQ+PC9kbD48L2RsPmQCCw8WAh8CBT88ZGwgY2xhc3M9J29mZnNldC10b3AtMCc+PGR0PiA8L2R0PjxkZD4rOTEgOTIyMDQzNzY4MjwvZGQ+PC9kbD5kZD6ZOjSfQ5uPpNQt0CNQ5DI1ZDVt" />
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

                        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="46798EB0" />
                        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                            value="/wEdAA60sfXvicLQVBV+9pJlVP3JD7y5ejT59jZSA8PnRjVCx5Q4dp0uNPsVbe8jiZVw7RMY2vLgY+SAqmEA6OiWKa5uhrXtViehLA82cCb/2h+dRk6QE5inkDVuRDI52S44dqyfVFyO0cCPrpER53fgJQ2eITAC/yfRjqZIixmnZPRfi83ldVuunTLxEA1C2gXlzJDEutyp67ZWJDUOG4Hx2XEnfl8oHJnX6Y7aC/VPoEnA2dIyXCf46LviCTdrDp64yV3tm5r+YCd2IpeHEZZ52mY5k+TZLNKyUFrCPb78yQjYxf4tTw0pp429uMRv8rWSelP0KyuJ" />
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





        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brpt ccase">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="breadcumb-inner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="3132" class="elementor elementor-3132">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4300860 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="4300860" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a912982"
                                data-id="a912982" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-6ebe5e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6ebe5e6" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a2cfc5"
                                data-id="7a2cfc5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c361dbb elementor-widget elementor-widget-sectiontitle"
                                        data-id="c361dbb" data-element_type="widget"
                                        data-widget_type="sectiontitle.default">
                                        <div class="elementor-widget-container">

                                            <div class="">

                                                <div class="section-title t_center">

                                                    <h5>Contact Us</h5>


                                                    <h3>We Are Here For You</h3>

                                                    <div class="bar-main">
                                                        <div class="bar bar-big"></div>
                                                    </div>


                                                    <p>Got a project in mind? We’d love to hear about it. Take five
                                                        minutes to fill out our project form so that we can get to
                                                        know you and understand your project.</p>



                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-889b768 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="889b768" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-512ff1c"
                                                data-id="512ff1c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5f49b0a elementor-widget elementor-widget-iconbox"
                                                        data-id="5f49b0a" data-element_type="widget"
                                                        data-widget_type="iconbox.default">
                                                        <div class="elementor-widget-container">


                                                            <div class="icon-box style-two" style=" height: 300px;" />
                                                            <div class="icon-box-icon" />

                                                            <div class="icon">
                                                                <i class="flaticon flaticon-placeholder"></i>
                                                            </div>
                                                        </div>
                                                        <div class="icon-box-content">
                                                            <div class="title">
                                                            </div>

                                                            <div class="description"
                                                                style="font-family: 'Muli', sans-serif;">
                                                                <address class='contact-info offset-top-50'>
                                                                    <p class='h4 style=' font-style:normal;
                                                                        font-weight-bold text-picton-blue letter-space-none
                                                                        offset-top-none'>Our
                                                                        Address</p>
                                                                    <p>
                                                                    <p
                                                                        style="box-sizing: border-box; margin: 0px; font-family: Muli, sans-serif; font-size: 16px;">
                                                                        <span
                                                                            style="box-sizing: border-box; font-size: medium;">AltF
                                                                            AltF 30 N Gould St, Ste R, Sheridan, Wyoming, USA 82801
                                                                            </span>
                                                                    </p>
                                                    

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-949435b"
                                    data-id="949435b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-34efd43 elementor-widget elementor-widget-iconbox"
                                            data-id="34efd43" data-element_type="widget"
                                            data-widget_type="iconbox.default">
                                            <div class="elementor-widget-container">


                                                <div class="icon-box style-two" style=" height: 300px;">

                                                    <div class="icon-box-icon">

                                                        <div class="icon">
                                                            <i class="flaticon flaticon-clock-2"></i>
                                                        </div>


                                                    </div>

                                                    <div class="icon-box-content">
                                                        <div class="title">
                                                            <h2>Opening Hours</h2>
                                                        </div>
                                                        <div class="description">
                                                            <p>Mon - Fri: 10:00am - 06:30pm</p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-85d3680"
                                    data-id="85d3680" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c866ded elementor-widget elementor-widget-iconbox"
                                            data-id="c866ded" data-element_type="widget"
                                            data-widget_type="iconbox.default">
                                            <div class="elementor-widget-container">


                                                <div class="icon-box style-two" style=" height: 300px;">

                                                    <div class="icon-box-icon">

                                                        <div class="icon">
                                                            <i class="flaticon flaticon-call"></i>
                                                        </div>


                                                    </div>

                                                    <div class="icon-box-content">
                                                        <div class="title">
                                                            <h2>Contact Directly</h2>
                                                        </div>

                                                        <div class="description" style="color: black;">
                                                            <dl>
                                                                <dt></dt>
                                                                <dd>info@technosyslabs.com</dd>
                                                            </dl>
                                                            <dl class='offset-top-0'>
                                                                <dt></dt>
                                                                <div style='display: inline-block; margin-right: 5px;'>
                                                                    +91 9220437682</div>
                                                            </dl>
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
        </div>
        </section>

        <div class="template-home-wrapper">
            <div class="page-content-home-page">
                <div data-elementor-type="wp-page" data-elementor-id="4778" class="elementor elementor-4778">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-7d43a20 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7d43a20" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-82a39c3"
                                data-id="82a39c3" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4b52fc0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="4b52fc0" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9154ec1"
                                data-id="9154ec1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-41de8d6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="41de8d6" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no col-md-12 col-sm-12">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f599de col-md-6 col-sm-12"
                                                data-id="1f599de" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">


                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24a04ab  col-md-12 col-sm-12"
                                                    data-id="24a04ab" data-element_type="column">
                                                    <div
                                                        class="elementor-widget-wrap elementor-element-populated col-md-12 col-sm-12">


                                                        <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-5a254b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                            data-id="5a254b8" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-default">



                                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9663abd"
                                                                    data-id="9663abd" data-element_type="column"
                                                                    style="min-width: 50%; height: auto">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-fd38062 elementor-widget elementor-widget-flipbox"
                                                                            data-id="fd38062" data-element_type="widget"
                                                                            data-widget_type="flipbox.default">
                                                                            <div class="elementor-widget-container">




                                                                                <div class="flip-box style-two">
                                                                                    <div
                                                                                        class="flip-box-inner rs-flip-right">
                                                                                        <div class="flip-box-wrap">
                                                                                            <div class="front-part"
                                                                                                style="background-image: url('wp-content/images/c11.jpg')">

                                                                                            </div>
                                                                                            <!-- .front-part -->

                                                                                            <div class="back-part"
                                                                                                style="background-color: #ece6e3">
                                                                                                <div
                                                                                                    class="back-background-overlay">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="back-content-part">

                                                                                                    <div
                                                                                                        class="back-title-part">

                                                                                                        <h2
                                                                                                            class="back-title">
                                                                                                        </h2>

                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="back-desc-part">
                                                                                                        <h4>Customer-First
                                                                                                            Philosophy
                                                                                                        </h4>
                                                                                                        <p
                                                                                                            class="back-desc">
                                                                                                            We put
                                                                                                            our
                                                                                                            customers
                                                                                                            at the
                                                                                                            center
                                                                                                            of
                                                                                                            everything
                                                                                                            we do,
                                                                                                            ensuring
                                                                                                            we
                                                                                                            deeply
                                                                                                            understand
                                                                                                            and
                                                                                                            consistently
                                                                                                            exceed
                                                                                                            their
                                                                                                            unique
                                                                                                            business
                                                                                                            requirements.
                                                                                                        </p>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- .back-part -->
                                                                                        </div>
                                                                                        <!-- .flip-box-wrap -->
                                                                                    </div>
                                                                                    <!-- .flip-box-inner -->
                                                                                </div>
                                                                                <!-- .flip-box -->



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                &nbsp;&nbsp;

                                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9663abd"
                                                                    data-id="9663abd" data-element_type="column"
                                                                    style="min-width: 50%; height: auto">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-fd38062 elementor-widget elementor-widget-flipbox"
                                                                            data-id="fd38062" data-element_type="widget"
                                                                            data-widget_type="flipbox.default">
                                                                            <div class="elementor-widget-container">




                                                                                <div class="flip-box style-two">
                                                                                    <div
                                                                                        class="flip-box-inner rs-flip-right">
                                                                                        <div class="flip-box-wrap">
                                                                                            <div class="front-part"
                                                                                                style="background-image: url('wp-content/images/c22.jpg')">

                                                                                            </div>
                                                                                            <!-- .front-part -->

                                                                                            <div class="back-part"
                                                                                                style="background-color: #ece6e3">
                                                                                                <div
                                                                                                    class="back-background-overlay">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="back-content-part">

                                                                                                    <div
                                                                                                        class="back-title-part">

                                                                                                        <h2
                                                                                                            class="back-title">
                                                                                                        </h2>

                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="back-desc-part">

                                                                                                        <h4> Responsive
                                                                                                            &
                                                                                                            Reliable
                                                                                                            Engagement
                                                                                                        </h4>
                                                                                                        <p
                                                                                                            class="back-desc">
                                                                                                            Our team
                                                                                                            is
                                                                                                            committed
                                                                                                            to
                                                                                                            providing
                                                                                                            timely,
                                                                                                            transparent,
                                                                                                            and
                                                                                                            dependable
                                                                                                            communication
                                                                                                            at every
                                                                                                            stage of
                                                                                                            your
                                                                                                            engagement.
                                                                                                        </p>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- .back-part -->
                                                                                        </div>
                                                                                        <!-- .flip-box-wrap -->
                                                                                    </div>
                                                                                    <!-- .flip-box-inner -->
                                                                                </div>
                                                                                <!-- .flip-box -->



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </section>



                                                        <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-5a254b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                            data-id="5a254b8" data-element_type="section"
                                                            style="margin-top: 25px">
                                                            <div class="elementor-container elementor-column-gap-default">



                                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9663abd"
                                                                    data-id="9663abd" data-element_type="column"
                                                                    style="min-width: 50%; height: auto">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-fd38062 elementor-widget elementor-widget-flipbox"
                                                                            data-id="fd38062" data-element_type="widget"
                                                                            data-widget_type="flipbox.default">
                                                                            <div class="elementor-widget-container">




                                                                                <div class="flip-box style-two">
                                                                                    <div
                                                                                        class="flip-box-inner rs-flip-right">
                                                                                        <div class="flip-box-wrap">
                                                                                            <div class="front-part"
                                                                                                style="background-image: url('wp-content/images/c33.jpg')">


                                                                                            </div>
                                                                                            <!-- .front-part -->

                                                                                            <div class="back-part"
                                                                                                style="background-color: #ece6e3">
                                                                                                <div
                                                                                                    class="back-background-overlay">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="back-content-part">

                                                                                                    <div
                                                                                                        class="back-title-part">

                                                                                                        <h2
                                                                                                            class="back-title">
                                                                                                        </h2>

                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="back-desc-part">


                                                                                                        <h4>Solution-Oriented
                                                                                                            Approach
                                                                                                        </h4>
                                                                                                        <p
                                                                                                            class="back-desc">
                                                                                                            We focus
                                                                                                            on
                                                                                                            delivering
                                                                                                            practical,
                                                                                                            value-driven
                                                                                                            solutions
                                                                                                            aligned
                                                                                                            with
                                                                                                            your
                                                                                                            strategic
                                                                                                            objectives
                                                                                                            and
                                                                                                            operational
                                                                                                            priorities.
                                                                                                        </p>

                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- .back-part -->
                                                                                        </div>
                                                                                        <!-- .flip-box-wrap -->
                                                                                    </div>
                                                                                    <!-- .flip-box-inner -->
                                                                                </div>
                                                                                <!-- .flip-box -->



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                &nbsp;&nbsp;

                                                                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9663abd"
                                                                    data-id="9663abd" data-element_type="column"
                                                                    style="min-width: 50%; height: auto">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-fd38062 elementor-widget elementor-widget-flipbox"
                                                                            data-id="fd38062" data-element_type="widget"
                                                                            data-widget_type="flipbox.default">
                                                                            <div class="elementor-widget-container">




                                                                                <div class="flip-box style-two">
                                                                                    <div
                                                                                        class="flip-box-inner rs-flip-right">
                                                                                        <div class="flip-box-wrap">
                                                                                            <div class="front-part"
                                                                                                style="background-image: url('wp-content/images/c44.jpg')">
                                                                                            </div>
                                                                                            <!-- .front-part -->

                                                                                            <div class="back-part"
                                                                                                style="background-color: #ece6e3">
                                                                                                <div
                                                                                                    class="back-background-overlay">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="back-content-part">

                                                                                                    <div
                                                                                                        class="back-title-part">

                                                                                                        <h2
                                                                                                            class="back-title">
                                                                                                        </h2>

                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="back-desc-part">

                                                                                                        <h4>Long-Term
                                                                                                            Partnership
                                                                                                            Mindset
                                                                                                        </h4>
                                                                                                        <p
                                                                                                            class="back-desc">
                                                                                                            We
                                                                                                            believe
                                                                                                            in
                                                                                                            building
                                                                                                            sustainable
                                                                                                            relationships
                                                                                                            founded
                                                                                                            on
                                                                                                            trust,
                                                                                                            accountability,
                                                                                                            and
                                                                                                            measurable
                                                                                                            outcomes.
                                                                                                        </p>
                                                                                                    </div>

                                                                                                </div>

                                                                                            </div>
                                                                                            <!-- .back-part -->
                                                                                        </div>
                                                                                        <!-- .flip-box-wrap -->
                                                                                    </div>
                                                                                    <!-- .flip-box-inner -->
                                                                                </div>
                                                                                <!-- .flip-box -->



                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </section>
                                                    </div>


                                                </div>






                                            </div>




                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58c4d14  col-md-6 col-sm-12"
                                                data-id="58c4d14" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0d65241 elementor-widget elementor-widget-heading"
                                                        data-id="0d65241" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container" id="get">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Get In Touch
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1df9a2f elementor-widget elementor-widget-shortcode"
                                                        data-id="1df9a2f" data-element_type="widget"
                                                        data-widget_type="shortcode.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-shortcode">
                                                                <div class="wpcf7 no-js" id="wpcf7-f2356-p4778-o1"
                                                                    lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response">
                                                                        <p role="status" aria-live="polite"
                                                                            aria-atomic="true"></p>
                                                                        <ul></ul>
                                                                    </div>



                                                                    <div class="form-area">
                                                                        <div class="form-inner">
                                                                            <div class="form-controls row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="sub">
                                                                                                <input
                                                                                                    name="ctl00$ContentPlaceHolder1$txtname"
                                                                                                    type="text"
                                                                                                    id="ContentPlaceHolder1_txtname"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                                    placeholder="Name" />
                                                                                                <span
                                                                                                    id="ContentPlaceHolder1_vldname"
                                                                                                    class="small"
                                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                                    Enter
                                                                                                    Name</span>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="sub2">
                                                                                                <input
                                                                                                    name="ctl00$ContentPlaceHolder1$txtemail"
                                                                                                    type="email"
                                                                                                    id="ContentPlaceHolder1_txtemail"
                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                                                                    placeholder="Email" />
                                                                                                <span
                                                                                                    id="ContentPlaceHolder1_vldemail"
                                                                                                    class="small"
                                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                                    Enter
                                                                                                    Email</span>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="sub3">
                                                                                                <input
                                                                                                    name="ctl00$ContentPlaceHolder1$txtphone"
                                                                                                    type="text"
                                                                                                    id="ContentPlaceHolder1_txtphone"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                                    placeholder="Phone" />

                                                                                                <span
                                                                                                    id="ContentPlaceHolder1_RequiredFieldValidator3"
                                                                                                    class="small"
                                                                                                    style="color:Red;display:none;">Please
                                                                                                    Enter
                                                                                                    Number</span>

                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="sub4">
                                                                                                <input
                                                                                                    name="ctl00$ContentPlaceHolder1$txtwebsite"
                                                                                                    type="text"
                                                                                                    id="ContentPlaceHolder1_txtwebsite"
                                                                                                    class="form-control"
                                                                                                    placeholder="Website" />
                                                                                                <span
                                                                                                    id="ContentPlaceHolder1_vldweb"
                                                                                                    class="small"
                                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                                    Enter
                                                                                                    Website</span>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <p>
                                                                                            <span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="textarea-234">
                                                                                                <textarea name="ctl00$ContentPlaceHolder1$txtmsg" rows="2" cols="20" id="ContentPlaceHolder1_txtmsg"
                                                                                                    class="wpcf7-form-control wpcf7-textarea form-control" placeholder="Your Message">
</textarea>
                                                                                                <span
                                                                                                    id="ContentPlaceHolder1_vldmsg"
                                                                                                    class="small"
                                                                                                    style="color:Red;visibility:hidden;">Please
                                                                                                    Enter
                                                                                                    Message</span>
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
                                                                                                name="ctl00$ContentPlaceHolder1$BtnContact"
                                                                                                value="Contact Now"
                                                                                                onclick="return executeContactRecaptcha();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$BtnContact&quot;, &quot;&quot;, true, &quot;Contact&quot;, &quot;&quot;, false, false))"
                                                                                                id="ContentPlaceHolder1_BtnContact"
                                                                                                class="button button-secondary"
                                                                                                class="form-control"
                                                                                                type="submit" />
                                                                                            <span
                                                                                                id="ContentPlaceHolder1_ResultLabel"
                                                                                                style="color:Red;"></span>
                                                                                            <span
                                                                                                id="ContentPlaceHolder1_lblErrorMessage"></span>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output" aria-hidden="true">
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
                        </div>
                    </section>

                </div>

            </div>

        </div>





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
            document.getElementById("ContentPlaceHolder1_vldweb"), document.getElementById("ContentPlaceHolder1_vldmsg")
            );
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
        ContentPlaceHolder1_vldname.errormessage = "Please Enter Name";
        ContentPlaceHolder1_vldname.validationGroup = "Contact";
        ContentPlaceHolder1_vldname.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldname.initialvalue = "";
        var ContentPlaceHolder1_vldemail = document.all ? document.all["ContentPlaceHolder1_vldemail"] : document
            .getElementById("ContentPlaceHolder1_vldemail");
        ContentPlaceHolder1_vldemail.controltovalidate = "ContentPlaceHolder1_txtemail";
        ContentPlaceHolder1_vldemail.errormessage = "Please Enter Email";
        ContentPlaceHolder1_vldemail.validationGroup = "Contact";
        ContentPlaceHolder1_vldemail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldemail.initialvalue = "";
        var ContentPlaceHolder1_RequiredFieldValidator3 = document.all ? document.all[
            "ContentPlaceHolder1_RequiredFieldValidator3"] : document.getElementById(
            "ContentPlaceHolder1_RequiredFieldValidator3");
        ContentPlaceHolder1_RequiredFieldValidator3.controltovalidate = "ContentPlaceHolder1_txtphone";
        ContentPlaceHolder1_RequiredFieldValidator3.errormessage = "Please Enter Number";
        ContentPlaceHolder1_RequiredFieldValidator3.display = "Dynamic";
        ContentPlaceHolder1_RequiredFieldValidator3.validationGroup = "Contact";
        ContentPlaceHolder1_RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_RequiredFieldValidator3.initialvalue = "";
        var ContentPlaceHolder1_vldweb = document.all ? document.all["ContentPlaceHolder1_vldweb"] : document
            .getElementById("ContentPlaceHolder1_vldweb");
        ContentPlaceHolder1_vldweb.controltovalidate = "ContentPlaceHolder1_txtwebsite";
        ContentPlaceHolder1_vldweb.errormessage = "Please Enter Website";
        ContentPlaceHolder1_vldweb.validationGroup = "Contact";
        ContentPlaceHolder1_vldweb.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldweb.initialvalue = "";
        var ContentPlaceHolder1_vldmsg = document.all ? document.all["ContentPlaceHolder1_vldmsg"] : document
            .getElementById("ContentPlaceHolder1_vldmsg");
        ContentPlaceHolder1_vldmsg.controltovalidate = "ContentPlaceHolder1_txtmsg";
        ContentPlaceHolder1_vldmsg.errormessage = "Please Enter Message";
        ContentPlaceHolder1_vldmsg.validationGroup = "Contact";
        ContentPlaceHolder1_vldmsg.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
        ContentPlaceHolder1_vldmsg.initialvalue = "";
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
            }, null, null, $get("ContentPlaceHolder1_txtphone"));
        });

        document.getElementById('ContentPlaceHolder1_RequiredFieldValidator3').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_RequiredFieldValidator3'));
        }

        document.getElementById('ContentPlaceHolder1_vldweb').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vldweb'));
        }

        document.getElementById('ContentPlaceHolder1_vldmsg').dispose = function() {
            Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder1_vldmsg'));
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
