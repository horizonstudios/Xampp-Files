using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ViewControl : MonoBehaviour {

    public float mouseSens;
    private float vRotation;
    public float minViewRange;
    public float maxViewRange;

	// Use this for initialization
	void Start () {
        Cursor.lockState = CursorLockMode.Locked;
	}
	
	// Update is called once per frame
	void FixedUpdate () {
        float mouseView = Input.GetAxis("Mouse X") * mouseSens;
        vRotation -= Input.GetAxis("Mouse Y") * mouseSens;

        transform.Rotate(0, mouseView, 0);

        vRotation = Mathf.Clamp(vRotation, minViewRange, maxViewRange);

        Camera.main.transform.localRotation = Quaternion.Euler(vRotation, 0, 0);
	}
}
