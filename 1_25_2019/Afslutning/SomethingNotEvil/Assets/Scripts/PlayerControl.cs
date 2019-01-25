using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerControl : MonoBehaviour {

    private CharacterController cc;
    public float playerSpeed;
    private float verticalAscension;
    public float jumpSpeed;

	// Use this for initialization
	void Start () {
        cc = GetComponent<CharacterController>();
	}
	
	// Update is called once per frame
	void FixedUpdate () {
        float vertical = Input.GetAxis("Vertical") * playerSpeed;
        var horizontal = Input.GetAxis("Horizontal") * playerSpeed;

        verticalAscension += Physics.gravity.y * Time.deltaTime;

        if (Input.GetKeyDown(KeyCode.Space) && cc.isGrounded)
        {
            verticalAscension = jumpSpeed;
        }

        Vector3 speed = new Vector3(horizontal, verticalAscension, vertical);
        speed = transform.rotation * speed;
        
        cc.Move(speed * Time.deltaTime);
    }
    private void Update()
    {

    }
}
